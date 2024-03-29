<?php

namespace App\Http\Controllers;

use App\Pasar;
use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function index()
    {

        $data = Pasar::paginate(15);
        return view('pasar', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Pasar::find($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/pasar');
        }
    }
}
