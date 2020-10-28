<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasarController extends Controller
{

    public function index()
    {
        $data = Pasar::all();
        return response()->json($data);
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

        $pasar = new Pasar;
        $pasar->user_id = Auth::guard('user')->user()->id;
        $pasar->nama = $request->nama;
        $pasar->deskripsi = $request->deskripsi;
        $pasar->harga = $request->harga;
        $pasar->nomer_hp = $request->nomer_hp;
        $pasar->gambar = $directory . "/" . $file->getClientOriginalName();
        $pasar->save();

        return response()->json($pasar);
    }

    public function destroy($id)
    {
        $data = Pasar::find($id);
        unlink($data->gambar);
        $hapus = $data->delete();
        if ($hapus) {
            return response()->json();
        }
        return response()->json('error', 400);
    }

    public function indexUser()
    {
        $data = Pasar::where('user_id', '=', Auth::guard('user')->user()->id)->get();
        return response()->json($data);
    }
}
