<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratKeteranganDomisili;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class SuratKeteranganDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $suratKeteranganDomisili = SuratKeteranganDomisili::all();
        return view('surat', ['suratKeteranganDomisili' => $suratKeteranganDomisili]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAddSuratKeteranganDomisili');
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
        $data = SuratKeteranganDomisili::find($id);
        $pdf = PDF::loadView('surat.SuratKeteranganDomisili', array('data' => $data));
        return $pdf->download('surat.SuratKeteranganDomisili.pdf');
    }

    // function to finish surat
    public function finish($id)
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::find($id);
        $suratKeteranganDomisili->update(array(
            'status_surat' => 1,
        ));
        return redirect('/surat');
    }


    // function to finish surat
    public function edit($id)
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::find($id);
        $suratKeteranganDomisili->update(array(
            'status_surat' => 1,
        ));
        return redirect('/surat');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeteranganDomisili $suratKeteranganDomisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SuratKeteranganDomisili  $suratKeteranganDomisili
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratKeteranganDomisili = SuratKeteranganDomisili::find($id);
        $hapus = $suratKeteranganDomisili->delete();
        if ($hapus) {
            return redirect('/surat');
        }
    }
}
