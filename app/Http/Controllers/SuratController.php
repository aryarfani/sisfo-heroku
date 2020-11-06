<?php

namespace App\Http\Controllers;

use App\SuratKeteranganDomisili;
use App\SuratKeteranganUsaha;
use App\SuratKeteranganTidakMampu;

class SuratController extends Controller
{

    public function index()
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::with('user')->get();
        $suratKeteranganUsaha = SuratKeteranganUsaha::with('user')->get();
        $suratKeteranganTidakMampu = SuratKeteranganTidakMampu::with('user')->get();

        $data = array_merge($suratKeteranganDomisili->toArray(),  $suratKeteranganTidakMampu->toArray());
        $data = array_merge($data, $suratKeteranganUsaha->toArray());

        return view('surat', ['data' => $data]);
    }
}
