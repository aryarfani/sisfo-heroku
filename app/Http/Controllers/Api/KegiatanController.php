<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{

    public function index()
    {
        $kegiatan = Kegiatan::all();
        return response()->json($kegiatan);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tempat' => 'required',
            'gambar' => 'required',
        ]);

        $directory = 'assets/images/home';
        $file = $request->file('gambar');
        $file->move($directory, $file->getClientOriginalName());

        $kegiatan = new Kegiatan;
        $kegiatan->user_id = Auth::guard('user')->user()->id;
        $kegiatan->nama = $request->nama;
        $kegiatan->tempat = $request->tempat;
        $kegiatan->gambar = $directory . "/" . $file->getClientOriginalName();
        $kegiatan->save();

        return response()->json($kegiatan);
    }
}