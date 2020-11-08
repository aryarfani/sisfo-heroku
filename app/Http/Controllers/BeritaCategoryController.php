<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use Illuminate\Http\Request;

class BeritaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $beritaCategory = NewsCategory::paginate(15);;
        return view('beritaCategory', ['beritaCategory' => $beritaCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddBeritaCategory');
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
            'name' => 'required',
        ]);
        if ($request->method() == "POST") {
            $home = new NewsCategory;
            $home->name = $request->name;
            $home->save();
            return redirect('/berita-kategori');
        } else {
            return redirect('/berita-kategori');
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
        $data = NewsCategory::find($id);
        return view('formEditBeritaCategory', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = NewsCategory::find($id);
        return view('formEditBeritaCategory', ['data' => $data]);
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
            'name' => 'required',
        ]);
        $home = NewsCategory::find($id);
        $home->name = $request->name;
        $home->save();
        return redirect('/berita-kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $home = NewsCategory::find($id);
        $hapus = $home->delete();
        if ($hapus) {
            return redirect('/berita-kategori');
        }
    }
}
