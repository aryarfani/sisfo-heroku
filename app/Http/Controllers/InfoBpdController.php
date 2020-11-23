<?php

namespace App\Http\Controllers;

use App\InfoBpd;
use Illuminate\Http\Request;

class InfoBpdController extends Controller
{
    public function index()
    {
        $data = InfoBpd::first();
        // if data exist show edit
        if ($data == null) {
            return view('formAddInfoBpd');
        }
        return view('formEditInfoBpd', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddInfoBpd');
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
            'ketua' => 'required',
            'sekretaris' => 'required',
            'wakil' => 'required',
        ]);

        if ($request->method() == "POST") {

            $info_bpd = new InfoBpd;
            $info_bpd->wakil = $request->wakil;
            $info_bpd->sekretaris = $request->sekretaris;
            $info_bpd->ketua = $request->ketua;
            $info_bpd->anggota1 = $request->anggota1;
            $info_bpd->anggota2 = $request->anggota2;
            $info_bpd->anggota3 = $request->anggota3;
            $info_bpd->anggota4 = $request->anggota4;
            $info_bpd->anggota5 = $request->anggota5;

            $info_bpd->save();
            return redirect('/info-bpd');
        } else {
            return redirect('/info-bpd');
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
        $data = InfoBpd::find($id);
        return view('formEditInfoBpd', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = InfoBpd::find($id);
        return view('formEditInfoBpd', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'ketua' => 'required',
            'sekretaris' => 'required',
            'wakil' => 'required',
        ]);

        $info_bpd = InfoBpd::first();
        $info_bpd->wakil = $request->wakil;
        $info_bpd->sekretaris = $request->sekretaris;
        $info_bpd->ketua = $request->ketua;
        $info_bpd->anggota1 = $request->anggota1;
        $info_bpd->anggota2 = $request->anggota2;
        $info_bpd->anggota3 = $request->anggota3;
        $info_bpd->anggota4 = $request->anggota4;
        $info_bpd->anggota5 = $request->anggota5;

        $info_bpd->save();
        return redirect('/info-bpd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $data = InfoBpd::find($id);
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/info-bpd');
        }
    }
}
