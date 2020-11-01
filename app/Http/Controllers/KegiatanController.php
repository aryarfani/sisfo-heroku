<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {

        $data = Kegiatan::all();
        return view('kegiatan', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Kegiatan::find($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/kegiatan');
        }
    }
}
