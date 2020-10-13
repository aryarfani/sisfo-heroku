<?php

namespace App\Http\Controllers;

use App\Potency;
use App\PotencyCategory;
use Illuminate\Http\Request;

class PotencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $potency = Potency::find(1);
        // dd($potency->category->name);
        $potency = Potency::all();
        return view('potency', ['potency' => $potency]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $potencyCategory = PotencyCategory::pluck('name', 'id');
        return view('formAddPotency', ['potencyCategory' => $potencyCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $file->move($directory, $file->getClientOriginalName());

            $potency = new Potency;
            $potency->title = $request->title;
            $potency->address = $request->address;
            $potency->potency_category_id = $request->potency_category_id;
            $potency->image = $directory . "/" . $file->getClientOriginalName();
            $potency->save();
            return redirect('/potensi');
        } else {
            return redirect('/potensi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function show(Potency $potency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function edit(Potency $potency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Potency $potency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Potency  $potency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $potency = Potency::find($id);
        $hapus = $potency->delete();
        if ($hapus) {
            return redirect('/potensi');
        }
    }
}
