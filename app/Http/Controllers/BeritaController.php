<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //  */

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $berita = News::all();
        return view('berita', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $beritaCategory = NewsCategory::pluck('name', 'id');
        return view('formAddBerita', ['beritaCategory' => $beritaCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     */
    public function store(Request $request)
    {
        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $file->move($directory, $file->getClientOriginalName());

            $news = new News;
            $news->title = $request->title;
            $news->author = auth()->user()->name;
            $news->content = $request->content;
            $news->visitor = 0;
            $news->news_category = $request->news_category;
            $news->image = $directory . "/" . $file->getClientOriginalName();
            $news->save();
            return redirect('/berita');
        } else {
            return redirect('/berita');
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
        $berita = News::find($id);
        $beritaCategory = NewsCategory::pluck('name', 'id');
        return view('formEditBerita', ['berita' => $berita, 'beritaCategory' => $beritaCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $home = News::find($id);
        $beritaCategory = NewsCategory::pluck('name', 'id');
        return view('formEditBerita', ['home' => $home]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        //        dd($request);
        $directory = 'assets/images/home';
        $file = $request->file('image');
        $file->move($directory, $file->getClientOriginalName());


        $home = News::find($id);
        $home->title = $request->title;
        $home->author = auth()->user()->name;
        $home->description = $request->description;
        $home->image = $directory . "/" . $file->getClientOriginalName();
        $home->save();
        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $home = News::find($id);
        $hapus = $home->delete();
        if ($hapus) {
            return redirect('/berita');
        }
    }
}
