<?php

namespace App\Http\Controllers;

use App\BumdesCategory;
use Illuminate\Http\Request;

class BumdesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $bumdesCategory = BumdesCategory::paginate(15);
        return view('bumdesCategory', ['bumdesCategory' => $bumdesCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('formAddBumdesCategory');
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
            $home = new BumdesCategory;
            $home->name = $request->name;
            $home->save();
            return redirect('/bumdes-kategori');
        } else {
            return redirect('/bumdes-kategori');
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
        $data = BumdesCategory::find($id);
        return view('formEditBumdesCategory', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = BumdesCategory::find($id);
        return view('formEditBumdesCategory', ['data' => $data]);
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
        $home = BumdesCategory::find($id);
        $home->name = $request->name;
        $home->save();
        return redirect('/bumdes-kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $home = BumdesCategory::find($id);
        $hapus = $home->delete();
        if ($hapus) {
            return redirect('/bumdes-kategori');
        }
    }
}
