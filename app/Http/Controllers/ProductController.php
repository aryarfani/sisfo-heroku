<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $product = Product::find(1);
        // dd($product->category->name);
        $product = Product::all();
        return view('product', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategory = ProductCategory::pluck('name', 'id');
        return view('formAddProduct', ['productCategory' => $productCategory]);
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
            'name' => 'required',
            'address' => 'required',
            'image' => 'required',
            'product_category_id' => 'required',
        ]);

        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $file->move($directory, $file->getClientOriginalName());

            $product = new Product;
            $product->name = $request->name;
            $product->address = $request->address;
            $product->product_category_id = $request->product_category_id;
            $product->image = $directory . "/" . $file->getClientOriginalName();
            $product->save();
            return redirect('/produk');
        } else {
            return redirect('/produk');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        $productCategory = ProductCategory::pluck('name', 'id');
        return view('formEditProduct', ['data' => $data, 'productCategory' => $productCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $productCategory = ProductCategory::pluck('name', 'id');
        return view('formEditProduct', ['data' => $data, 'productCategory' => $productCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'product_category_id' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->address = $request->address;
        $product->product_category_id = $request->product_category_id;

        // cek if image is changed
        if (isset($request->new_image)) {
            $directory = 'assets/images/home';
            $file = $request->file('new_image');
            $file->move($directory, $file->getClientOriginalName());
            $product->image = $directory . "/" . $file->getClientOriginalName();

            // delete old picture
            if (file_exists($request->image)) {
                unlink($request->image);
            }
        } else {
            $product->image = $request->image;
        }

        $product->save();
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        if (file_exists($data->image)) {
            unlink($data->image);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/produk');
        }
    }
}
