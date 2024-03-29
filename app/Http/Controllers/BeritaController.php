<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BeritaController extends Controller
{

    public function index()
    {
        $data = News::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('news');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }
        return view('berita', ['berita' => $data->paginate(15)]);
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        if ($request->method() == "POST") {
            $directory = 'assets/images/home';
            $file = $request->file('image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);

            $news = new News;
            $news->title = $request->title;
            $news->author = auth()->user()->name;
            $news->content = $request->content;
            $news->news_category = $request->news_category;
            $news->image = $directory . "/" . $new_file_name;
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
        $data = News::find($id);
        $beritaCategory = NewsCategory::pluck('name', 'id');

        return view('formEditBerita', ['data' => $data, 'beritaCategory' => $beritaCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = News::find($id);
        $beritaCategory = NewsCategory::pluck('name', 'id');

        return view('formEditBerita', ['data' => $data, 'beritaCategory' => $beritaCategory]);
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
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);
        $news = News::find($id);
        $news->title = $request->title;
        $news->author = auth()->user()->name;
        $news->content = $request->content;

        // cek if image is changed
        if (isset($request->new_image)) {
            $directory = 'assets/images/home';
            $file = $request->file('new_image');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);
            $news->image = $directory . "/" . $new_file_name;

            // delete old picture
            if (file_exists($request->image)) {
                unlink($request->image);
            }
        } else {
            $news->image = $request->image;
        }
        $news->save();
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
        $data = News::find($id);
        if (file_exists($data->image)) {
            unlink($data->image);
        }

        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/berita');
        }
    }
}
