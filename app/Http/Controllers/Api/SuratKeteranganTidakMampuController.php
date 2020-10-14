<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SuratKeteranganTidakMampu;
use Illuminate\Support\Facades\Auth;

class SuratKeteranganTidakMampuController extends Controller
{
    public function index()
    {
        $data = SuratKeteranganTidakMampu::all();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $suratDomisili = new SuratKeteranganTidakMampu;
        $suratDomisili->jenis_surat = 'Surat Keterangan Tidak Mampu';
        $suratDomisili->user_id = Auth::guard('user')->user()->id;
        $suratDomisili->nama = $request->nama;
        $suratDomisili->nik = $request->nik;
        $suratDomisili->jenis_kelamin = $request->jenis_kelamin;
        $suratDomisili->ttl = $request->ttl;
        $suratDomisili->alamat = $request->alamat;
        $suratDomisili->agama = $request->agama;
        $suratDomisili->pekerjaan = $request->pekerjaan;
        $suratDomisili->save();
        return response()->json($suratDomisili);
    }
}
