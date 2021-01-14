<?php

namespace App\Http\Controllers;

use App\SuratKeteranganDomisili;
use App\SuratKeteranganUsaha;
use App\SuratKeteranganTidakMampu;
use Carbon\Carbon;

class SuratController extends Controller
{

    public function index()
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::with('user');
        $suratKeteranganUsaha = SuratKeteranganUsaha::with('user');
        $suratKeteranganTidakMampu = SuratKeteranganTidakMampu::with('user');

        if (request()->query('start') != null) {
            $start = request()->query('start');
            $end = request()->query('end');
            $suratKeteranganDomisili = $suratKeteranganDomisili
                ->latest()
                ->whereBetween('created_at', [$start, $end])
                ->get();
            $suratKeteranganUsaha =  $suratKeteranganUsaha
                ->latest()
                ->whereBetween('created_at', [$start, $end])
                ->get();
            $suratKeteranganTidakMampu = $suratKeteranganTidakMampu
                ->latest()
                ->whereBetween('created_at', [$start, $end])
                ->get();
        } else {
            $suratKeteranganDomisili = $suratKeteranganDomisili->get();
            $suratKeteranganUsaha = $suratKeteranganUsaha->get();
            $suratKeteranganTidakMampu = $suratKeteranganTidakMampu->get();
        }

        $data = array_merge($suratKeteranganDomisili->toArray(),  $suratKeteranganTidakMampu->toArray());
        $data = array_merge($data, $suratKeteranganUsaha->toArray());

        return view('surat', ['data' => $data]);
    }
}
