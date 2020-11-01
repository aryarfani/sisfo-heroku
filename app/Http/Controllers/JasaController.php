<?php

namespace App\Http\Controllers;

use App\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index()
    {

        $data = Jasa::all();
        return view('jasa', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Jasa::find($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/jasa');
        }
    }
}
