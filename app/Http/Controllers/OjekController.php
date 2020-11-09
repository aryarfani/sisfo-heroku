<?php

namespace App\Http\Controllers;

use App\Ojek;
use Illuminate\Http\Request;

class OjekController extends Controller
{
    public function index()
    {
        $data = Ojek::paginate(15);
        return view('ojek', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Ojek::find($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/ojek');
        }
    }
}
