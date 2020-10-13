<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratKeteranganUsaha;
use Barryvdh\DomPDF\Facade as PDF;

class SuratKeteranganUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $suratDomisili = SuratKeteranganUsaha::all();
        return view('surat', ['suratDomisili' => $suratDomisili]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAddSuratKeteranganUsaha');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    // this function is to create pdf
    public function show($id)
    {
        $data = SuratKeteranganUsaha::find($id);
        // dd($data);

        $pdf = PDF::loadView('surat\suratKeteranganUsaha', array('data' => $data));
        return $pdf->download('surat\suratKeteranganUsaha.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SuratKeteranganUsaha  $suratDomisili
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeteranganUsaha $suratDomisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeteranganUsaha  $suratDomisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganUsaha $suratDomisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeteranganUsaha  $suratDomisili
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratDomisili = SuratKeteranganUsaha::find($id);
        $hapus = $suratDomisili->delete();
        if ($hapus) {
            return redirect('/potensi');
        }
    }
}
