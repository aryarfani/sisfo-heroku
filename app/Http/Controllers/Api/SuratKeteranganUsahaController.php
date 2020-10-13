<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuratKeteranganUsaha;

class SuratKeteranganUsahaController extends Controller
{
    public function index()
    {
        $data = SuratKeteranganUsaha::all();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $suratDomisili = new SuratKeteranganUsaha;
        $suratDomisili->jenis_surat = 'Surat Keterangan Usaha';
        $suratDomisili->nama = $request->nama;
        $suratDomisili->jenis_kelamin = $request->jenis_kelamin;
        $suratDomisili->ttl = $request->ttl;
        $suratDomisili->status = $request->status;
        $suratDomisili->alamat = $request->alamat;
        $suratDomisili->nama_usaha = $request->nama_usaha;
        $suratDomisili->save();
        return response()->json($suratDomisili);
    }
}
