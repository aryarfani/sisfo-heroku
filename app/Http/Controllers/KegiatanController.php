<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::query();
        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('kegiatan');
            foreach ($columns as $column) {
                $data->orWhere($column, 'LIKE', '%' . $search . '%');
            }
        }

        return view('kegiatan', ['data' => $data->paginate(15)]);
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
