<?php

namespace App\Http\Controllers;

use App\Bumdes;
use App\BumdesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bumdes::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('bumdes');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }
        return view('bumdes', ['bumdes' => $data->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bumdesCategory = BumdesCategory::pluck('name', 'id');
        return view('formAddBumdes', ['bumdesCategory' => $bumdesCategory]);
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
            'image' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'bumdes_category_id' => 'required',
        ]);

        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);

            $bumdes = new Bumdes;
            $bumdes->name = $request->name;
            $bumdes->phone = $request->phone;
            $bumdes->bumdes_category_id = $request->bumdes_category_id;
            $bumdes->image = $directory . "/" . $new_file_name;
            $bumdes->save();
            return redirect('/bumdes');
        } else {
            return redirect('/bumdes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bumdes::find($id);
        $bumdesCategory = BumdesCategory::pluck('name', 'id');
        return view('formEditBumdes', ['data' => $data, 'bumdesCategory' => $bumdesCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bumdes::find($id);
        $bumdesCategory = BumdesCategory::pluck('name', 'id');
        return view('formEditBumdes', ['data' => $data, 'bumdesCategory' => $bumdesCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'bumdes_category_id' => 'required',
        ]);

        $bumdes = Bumdes::find($id);
        $bumdes->name = $request->name;
        $bumdes->phone = $request->phone;
        $bumdes->bumdes_category_id = $request->bumdes_category_id;

        // cek if image is changed
        if (isset($request->new_image)) {
            $directory = 'assets/images/home';
            $file = $request->file('new_image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);
            $bumdes->image = $directory . "/" . $new_file_name;

            // delete old picture
            if (file_exists($request->image)) {
                unlink($request->image);
            }
        } else {
            $bumdes->image = $request->image;
        }

        $bumdes->save();
        return redirect('/bumdes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Bumdes::find($id);
        if (file_exists($data->image)) {
            unlink($data->image);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/bumdes');
        }
    }
}
