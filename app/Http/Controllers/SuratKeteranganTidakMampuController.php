<?php

namespace App\Http\Controllers;

use App\InfoDesa;
use Illuminate\Http\Request;
use App\SuratKeteranganTidakMampu;
use Barryvdh\DomPDF\Facade as PDF;

class SuratKeteranganTidakMampuController extends Controller
{
    public function index()
    {

        $SuratKeteranganTidakMampu = SuratKeteranganTidakMampu::all();
        return view('surat', ['SuratKeteranganTidakMampu' => $SuratKeteranganTidakMampu]);
    }

    public function create()
    {
        return view('formAddSuratKeteranganTidakMampu');
    }


    public function store(Request $request)
    {
    }

    // this function is to create pdf
    public function show($id)
    {
        $infoDesa = InfoDesa::first();

        $data = SuratKeteranganTidakMampu::find($id);
        $pdf = PDF::loadView('surat.suratKeteranganTidakMampu', array('data' => $data, 'infoDesa' => $infoDesa));
        return $pdf->download('surat.suratKeteranganTidakMampu.pdf');
    }

    // function to finish surat
    public function finish($id)
    {
        $SuratKeteranganTidakMampu = SuratKeteranganTidakMampu::find($id);
        $SuratKeteranganTidakMampu->update(array(
            'status_surat' => 1,
        ));
        return redirect('/surat');
    }

    public function edit(SuratKeteranganTidakMampu $SuratKeteranganTidakMampu)
    {
        //
    }

    public function update(Request $request, SuratKeteranganTidakMampu $SuratKeteranganTidakMampu)
    {
        //
    }

    public function destroy($id)
    {
        $SuratKeteranganTidakMampu = SuratKeteranganTidakMampu::find($id);
        $hapus = $SuratKeteranganTidakMampu->delete();
        if ($hapus) {
            return redirect('/potensi');
        }
    }
}
