<?php

namespace App\Http\Controllers;

use App\Potency;
use App\PotencyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PotencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Potency::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('potency');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }
        return view('potency', ['potency' => $data->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $potencyCategory = PotencyCategory::pluck('name', 'id');
        return view('formAddPotency', ['potencyCategory' => $potencyCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'image' => 'required',
            'potency_category_id' => 'required',
        ]);
        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);

            $potency = new Potency;
            $potency->title = $request->title;
            $potency->address = $request->address;
            $potency->potency_category_id = $request->potency_category_id;
            $potency->image = $directory . "/" . $new_file_name;
            $potency->save();
            return redirect('/potensi');
        } else {
            return redirect('/potensi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Potency::find($id);
        $potencyCategory = PotencyCategory::pluck('name', 'id');
        return view('formEditPotency', ['potencyCategory' => $potencyCategory, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Potency::find($id);
        $potencyCategory = PotencyCategory::pluck('name', 'id');
        return view('formEditPotency', ['potencyCategory' => $potencyCategory, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'image' => 'required',
            'potency_category_id' => 'required',
        ]);

        $potency = Potency::find($id);
        $potency->title = $request->title;
        $potency->address = $request->address;
        $potency->potency_category_id = $request->potency_category_id;
        // cek if image is changed
        if (isset($request->new_image)) {
            $directory = 'assets/images/home';
            $file = $request->file('new_image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);
            $potency->image = $directory . "/" . $new_file_name;

            // delete old picture
            if (file_exists($request->image)) {
                unlink($request->image);
            }
        } else {
            $potency->image = $request->image;
        }
        $potency->save();
        return redirect('/potensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $potency = Potency::find($id);
        $hapus = $potency->delete();
        if ($hapus) {
            return redirect('/potensi');
        }
    }
}
