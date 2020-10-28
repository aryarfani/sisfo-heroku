<?php

namespace App\Http\Controllers;

use App\Ojek;
use Illuminate\Http\Request;

class OjekController extends Controller
{
    public function index()
    {

        $data = Ojek::all();
        return view('ojek', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Ojek::find($id);
        unlink($data->gambar);
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/ojek');
        }
    }
}
