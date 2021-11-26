<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // take all user based on desa id
        $user = User::query();

        $search = request()->query('q');

        // if qeury is not empty
        if ($search != "") {
            // take all column of model
            $columns = Schema::getColumnListing('users');
            foreach ($columns as $column) {
                $user->orWhere($column, 'LIKE', '%' . $search . '%');
            }

            return view('user', ['user' => $user->where('desa_id', Auth::user()->desa->id)->paginate(15)]);
        }
        return view('user', ['user' => $user->where('desa_id', Auth::user()->desa->id)->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formAddUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->method() == "POST") {

            $this->validate($request, [
                'nik' => 'required|numeric|unique:users,nik',
                'nama' => 'required',
                'pekerjaan' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'nomer_hp' => 'required',
                'jenis_kelamin' => 'required',
                'gambar' => 'required',
                'password' => 'required',
            ]);
            $user = new User;
            $user->nik = $request->nik;
            $user->nama = $request->nama;
            $user->pekerjaan = $request->pekerjaan;
            $user->agama = $request->agama;
            $user->alamat = $request->alamat;
            $user->status = $request->status;
            $user->nomer_hp = $request->nomer_hp;
            $user->jenis_kelamin = $request->jenis_kelamin;
            $user->desa_id = Auth::user()->desa->id;
            $user->password = bcrypt($request->password);

            if (isset($request->gambar)) {
                $directory = 'assets/images/home';
                $file = $request->file('gambar');
                $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
                $file->move($directory, $new_file_name);
                $user->gambar = $directory . "/" . $new_file_name;
            }

            $user->save();
            return redirect('/user');
        } else {
            return redirect('/user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('formEditUser', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('formEditUser', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'nik' => 'required|numeric|unique:users,nik,' . $user->id,
            'nama' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'nomer_hp' => 'required',
            'jenis_kelamin' => 'required',
        ]);


        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->pekerjaan = $request->pekerjaan;
        $user->agama = $request->agama;
        $user->alamat = $request->alamat;
        $user->status = $request->status;
        $user->nomer_hp = $request->nomer_hp;
        $user->jenis_kelamin = $request->jenis_kelamin;

        // cek if password is changed
        if (isset($request->new_password)) {
            $user->password = bcrypt($request->new_password);
        } else {
            $user->password = $request->password;
        }

        // cek if image is changed
        if (isset($request->new_gambar)) {
            $directory = 'assets/images/home';
            $file = $request->file('new_gambar');
            $new_file_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move($directory, $new_file_name);
            $user->gambar = $directory . "/" . $new_file_name;

            // delete old picture
            if (file_exists($request->gambar)) {
                unlink($request->gambar);
            }
        } else {
            $user->gambar = $request->gambar;
        }
        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        if (file_exists($data->gambar)) {
            unlink($data->gambar);
        }
        $hapus = $data->delete();
        if ($hapus) {
            return redirect('/user');
        }
    }

    /**
     * Import user from excel
     */
    public function import(Request $request)
    {
        $fileImport = $request->file('import');
        // dd($fileImport);
        $fileImportName = date('dmyHis') . '.' . $fileImport->extension();
        $path = 'assets/imports';
        $fileImport->move($path, $fileImportName);

        Excel::import(new UsersImport, $path . '/' . $fileImportName);

        return redirect()->back()->with('status', 'File sukses di upload');
    }

    // function to approve selling
    public function approveSell($id)
    {
        $kegiatan = User::find($id);
        $kegiatan->update(['can_sell' => 1]);

        return redirect('/user')->with('status', 'Izin jualan telah diberikan');
    }
}
