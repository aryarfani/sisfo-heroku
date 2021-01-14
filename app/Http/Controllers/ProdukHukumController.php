<?php

namespace App\Http\Controllers;

use App\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProdukHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProdukHukum::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('produk_hukums');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }

        return view('produkHukum', ['produkHukum' => $data->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAddProdukHukum');
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
            'uraian' => 'required',
            'tahun' => 'required',
            'tentang' => 'required',
            'pdf' => 'required',
        ]);

        if ($request->method() == "POST") {
            $directory = 'assets/documents';
            $file = $request->file('pdf');
            $new_file_name = $file->getClientOriginalName();
            $file->move($directory, $new_file_name);

            $produkHukum = new ProdukHukum;
            $produkHukum->uraian = $request->uraian;
            $produkHukum->tahun = $request->tahun;
            $produkHukum->tentang = $request->tentang;
            $produkHukum->pdf = $directory . "/" . $new_file_name;
            $produkHukum->save();
            return redirect('/produk-hukum');
        } else {
            return redirect('/produk-hukum');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProdukHukum::find($id);
        return view('formEditProdukHukum', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProdukHukum::find($id);
        return view('formEditProdukHukum', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'uraian' => 'required',
            'tahun' => 'required',
            'tentang' => 'required',
        ]);

        $produkHukum = ProdukHukum::find($id);
        $produkHukum->uraian = $request->uraian;
        $produkHukum->tahun = $request->tahun;
        $produkHukum->tentang = $request->tentang;

        // jika ada pdf yang baru maka replace pfd yang lama
        if (isset($request->pdf)) {
            // delete old document if exist
            if (file_exists($produkHukum->pdf)) {
                unlink($produkHukum->pdf);
            }

            $directory = 'assets/documents';
            $file = $request->file('pdf');
            $new_file_name = $file->getClientOriginalName();
            $file->move($directory, $new_file_name);
            $produkHukum->pdf = $directory . "/" . $new_file_name;
        }

        $produkHukum->save();
        return redirect('/produk-hukum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdukHukum  $produkHukum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ProdukHukum::find($id);
        if (file_exists($data->pdf)) {
            unlink($data->pdf);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/produk-hukum');
        }
    }
}
