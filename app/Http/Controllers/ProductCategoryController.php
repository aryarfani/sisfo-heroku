<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $productCategory = ProductCategory::all();
        return view('productCategory', ['productCategory' => $productCategory]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $home = ProductCategory::find($id);
        return view('formEditDashboard', ['home' => $home]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
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
