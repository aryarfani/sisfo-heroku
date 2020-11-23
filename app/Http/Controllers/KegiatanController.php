<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {

        $data = Kegiatan::paginate(15);
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

    // function to approve kegiatan
    public function approve($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update(array(
            'is_approved' => 1,
        ));
        return redirect('/kegiatan');
    }
}
