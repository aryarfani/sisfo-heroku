<?php

namespace App\Http\Controllers;

use App\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function index()
    {

        $data = Pasar::all();
        return view('pasar', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Pasar::find($id);
        unlink($data->gambar);
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/pasar');
        }
    }
}
