<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JasaController extends Controller
{

    public function index()
    {
        $data = Jasa::where('user_id', '!=', Auth::guard('user')->user()->id)->get();
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'nomer_hp' => 'required',
        ]);


        $directory = 'assets/images/home';
        $file = $request->file('gambar');
        $file->move($directory, $file->getClientOriginalName());

        $jasa = new Jasa;
        $jasa->user_id = Auth::guard('user')->user()->id;
        $jasa->nama = $request->nama;
        $jasa->deskripsi = $request->deskripsi;
        $jasa->harga = $request->harga;
        $jasa->nomer_hp = $request->nomer_hp;
        $jasa->gambar = $directory . "/" . $file->getClientOriginalName();
        $jasa->save();

        return response()->json(['data' => $jasa]);
    }

    public function destroy($id)
    {
        $data = Jasa::findOrFail($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return response()->json();
        }
        return response()->json('error', 400);
    }

    // get the index only for logged user
    public function indexUser()
    {
        $data = Jasa::where('user_id', '=', Auth::guard('user')->user()->id)->get();
        return response()->json(['data' => $data]);
    }
}
