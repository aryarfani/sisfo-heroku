<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuratKeteranganDomisili;
use Illuminate\Support\Facades\Auth;

class SuratKeteranganDomisiliController extends Controller
{
    public function index()
    {
        $data = SuratKeteranganDomisili::all();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $suratDomisili = new SuratKeteranganDomisili;
        $suratDomisili->jenis_surat = 'Surat Keterangan Domisili';
        $suratDomisili->user_id = Auth::guard('user')->user()->id;
        $suratDomisili->nama = $request->nama;
        $suratDomisili->nik = $request->nik;
        $suratDomisili->jenis_kelamin = $request->jenis_kelamin;
        $suratDomisili->ttl = $request->ttl;
        $suratDomisili->status = $request->status;
        $suratDomisili->alamat = $request->alamat;
        $suratDomisili->agama = $request->agama;
        $suratDomisili->pekerjaan = $request->pekerjaan;
        $suratDomisili->kewarganegaraan = $request->kewarganegaraan;
        $suratDomisili->save();
        return response()->json($suratDomisili);
    }
}
