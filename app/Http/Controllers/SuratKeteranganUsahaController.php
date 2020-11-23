<?php

namespace App\Http\Controllers;

use App\InfoDesa;
use Illuminate\Http\Request;
use App\SuratKeteranganUsaha;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class SuratKeteranganUsahaController extends Controller
{
    public function index()
    {

        $suratKeteranganUsaha = SuratKeteranganUsaha::all();
        return view('surat', ['suratKeteranganUsaha' => $suratKeteranganUsaha]);
    }

    public function create()
    {
        return view('formAddSuratKeteranganUsaha');
    }


    public function store(Request $request)
    {
    }

    // this function is to create pdf
    public function show($id)
    {
        $infoDesa = InfoDesa::first();

        $data = SuratKeteranganUsaha::find($id);
        $pdf = PDF::loadView('surat.suratKeteranganUsaha', array('data' => $data, 'infoDesa' => $infoDesa));
        return $pdf->download('surat.suratKeteranganUsaha.pdf');
    }
    // function to finish surat
    public function finish($id)
    {
        $suratKeteranganUsaha = SuratKeteranganUsaha::find($id);
        $suratKeteranganUsaha->update(array(
            'status_surat' => 1,
        ));
        return redirect('/surat');
    }

    public function edit(SuratKeteranganUsaha $suratKeteranganUsaha)
    {
        //
    }

    public function update(Request $request, SuratKeteranganUsaha $suratKeteranganUsaha)
    {
        //
    }

    public function destroy($id)
    {
        $suratKeteranganUsaha = SuratKeteranganUsaha::find($id);
        $hapus = $suratKeteranganUsaha->delete();
        if ($hapus) {
            return redirect('/potensi');
        }
    }
}
