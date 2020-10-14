<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\SuratKeteranganDomisili;
use App\SuratKeteranganUsaha;
use App\SuratKeteranganTidakMampu;

class SuratController extends Controller
{
    public function index()
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::get();
        $suratKeteranganUsaha = SuratKeteranganUsaha::get();
        $suratKeteranganTidakMampu = SuratKeteranganTidakMampu::get();

        $data = array_merge($suratKeteranganDomisili->toArray(),  $suratKeteranganTidakMampu->toArray());
        $data = array_merge($data, $suratKeteranganUsaha->toArray());
        return response()->json($data);
    }
}
