<?php

namespace App\Http\Controllers;

use App\PotencyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PotencyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = PotencyCategory::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('potency_category');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }

        return view('potencyCategory', ['potencyCategory' => $data->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddPotencyCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        if ($request->method() == "POST") {
            $potencyCategory = new PotencyCategory;
            $potencyCategory->name = $request->name;
            $potencyCategory->save();
            return redirect('/potensi-kategori');
        } else {
            return redirect('/potensi-kategori');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PotencyCategory::find($id);
        return view('formEditPotencyCategory', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = PotencyCategory::find($id);
        return view('formEditPotencyCategory', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $potencyCategory = PotencyCategory::find($id);
        $potencyCategory->name = $request->name;
        $potencyCategory->save();
        return redirect('/potensi-kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $potencyCategory = PotencyCategory::find($id);
        $hapus = $potencyCategory->delete();
        if ($hapus) {
            return redirect('/potensi-kategori');
        }
    }
}
