<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\SuratKeteranganDomisili;
use App\SuratKeteranganUsaha;
use App\SuratKeteranganTidakMampu;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function index()
    {
        $currentUserId = Auth::guard('user')->user()->id;
        $suratKeteranganDomisili = SuratKeteranganDomisili::where('user_id', $currentUserId)->get();
        $suratKeteranganUsaha = SuratKeteranganUsaha::where('user_id', $currentUserId)->get();
        $suratKeteranganTidakMampu = SuratKeteranganTidakMampu::where('user_id', $currentUserId)->get();

        $data = array_merge($suratKeteranganDomisili->toArray(),  $suratKeteranganTidakMampu->toArray());
        $data = array_merge($data, $suratKeteranganUsaha->toArray());
        return response()->json($data);
    }
}
