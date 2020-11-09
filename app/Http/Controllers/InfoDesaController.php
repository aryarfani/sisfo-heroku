<?php

namespace App\Http\Controllers;

use App\InfoDesa;
use Illuminate\Http\Request;

class InfoDesaController extends Controller
{
    public function index()
    {
        $data = InfoDesa::all();
        return view('infoDesa', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddInfoDesa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kepala_desa' => 'required',
            'gambar_kepala_desa' => 'required',
            'alamat_kepala_desa' => 'required',
            'sekretaris' => 'required',
            'kaur_perencanaan' => 'required',
            'kaur_umum' => 'required',
            'kaur_keuangan' => 'required',
            'seksi_pelayanan' => 'required',
            'seksi_kesejahteraan' => 'required',
            'seksi_pemerintahan' => 'required',
            'nomor_bpd' => 'required',
            'nomor_pemdes' => 'required',
        ]);

        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('gambar_kepala_desa');
            $file->move($directory, $file->getClientOriginalName());

            $info_desa = new InfoDesa;
            $info_desa->kepala_desa = $request->kepala_desa;
            $info_desa->gambar_kepala_desa = $directory . "/" . $file->getClientOriginalName();
            $info_desa->alamat_kepala_desa = $request->alamat_kepala_desa;
            $info_desa->sekretaris = $request->sekretaris;
            $info_desa->kaur_keuangan = $request->kaur_keuangan;
            $info_desa->kaur_umum = $request->kaur_umum;
            $info_desa->kaur_perencanaan = $request->kaur_perencanaan;
            $info_desa->seksi_pemerintahan = $request->seksi_pemerintahan;
            $info_desa->seksi_kesejahteraan = $request->seksi_kesejahteraan;
            $info_desa->seksi_pelayanan = $request->seksi_pelayanan;
            $info_desa->nomor_pemdes = $request->nomor_pemdes;
            $info_desa->nomor_bpd = $request->nomor_bpd;

            $info_desa->save();
            return redirect('/dashboard');
        } else {
            return redirect('/dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = InfoDesa::find($id);
        return view('formEditInfoDesa', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = InfoDesa::find($id);
        return view('formEditInfoDesa', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kepala_desa' => 'required',
            'gambar_kepala_desa' => 'required',
            'alamat_kepala_desa' => 'required',
            'sekretaris' => 'required',
            'kaur_perencanaan' => 'required',
            'kaur_umum' => 'required',
            'kaur_keuangan' => 'required',
            'seksi_pelayanan' => 'required',
            'seksi_kesejahteraan' => 'required',
            'seksi_pemerintahan' => 'required',
            'nomor_bpd' => 'required',
            'nomor_pemdes' => 'required',
        ]);

        $directory = 'assets/images/home';
        $file = $request->file('gambar_kepala_desa');
        $file->move($directory, $file->getClientOriginalName());

        $info_desa = InfoDesa::first();
        $info_desa->kepala_desa = $request->kepala_desa;
        $info_desa->gambar_kepala_desa = $directory . "/" . $file->getClientOriginalName();
        $info_desa->alamat_kepala_desa = $request->alamat_kepala_desa;
        $info_desa->sekretaris = $request->sekretaris;
        $info_desa->kaur_keuangan = $request->kaur_keuangan;
        $info_desa->kaur_umum = $request->kaur_umum;
        $info_desa->kaur_perencanaan = $request->kaur_perencanaan;
        $info_desa->seksi_pemerintahan = $request->seksi_pemerintahan;
        $info_desa->seksi_kesejahteraan = $request->seksi_kesejahteraan;
        $info_desa->seksi_pelayanan = $request->seksi_pelayanan;
        $info_desa->nomor_pemdes = $request->nomor_pemdes;
        $info_desa->nomor_bpd = $request->nomor_bpd;

        $info_desa->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $data = InfoDesa::find($id);
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/dashboard');
        }
    }
}
