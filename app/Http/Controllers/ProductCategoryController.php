<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        $data = ProductCategory::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('product_categories');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }

        return view('productCategory', ['productCategory' => $data->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddProductCategory');
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
            $home = new ProductCategory;
            $home->name = $request->name;
            $home->save();
            return redirect('/produk-kategori');
        } else {
            return redirect('/produk-kategori');
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
        $data = ProductCategory::find($id);
        return view('formEditProductCategory', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = ProductCategory::find($id);
        return view('formEditProductCategory', ['data' => $data]);
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
        $home = ProductCategory::find($id);
        $home->name = $request->name;
        $home->save();
        return redirect('/produk-kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $home = ProductCategory::find($id);
        $hapus = $home->delete();
        if ($hapus) {
            return redirect('/produk-kategori');
        }
    }
}
