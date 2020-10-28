<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user', ['user' => $user]);
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
                'nik' => 'required|numeric',
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
            $user->password = bcrypt($request->password);

            if (isset($request->gambar)) {
                $directory = 'assets/images/home';
                $file = $request->file('gambar');
                $file->move($directory, $file->getClientOriginalName());
                $user->gambar = $directory . "/" . $file->getClientOriginalName();
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
        $this->validate($request, [
            'nik' => 'required|numeric',
            'nama' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'nomer_hp' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        $user = User::find($id);
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->pekerjaan = $request->pekerjaan;
        $user->agama = $request->agama;
        $user->alamat = $request->alamat;
        $user->status = $request->status;
        $user->nomer_hp = $request->nomer_hp;
        $user->jenis_kelamin = $request->jenis_kelamin;

        // cek if password is changed
        if (empty($request->new_password)) {
            $user->password = $request->password;
        } else {
            $user->password = bcrypt($request->new_password);
        }

        $user->gambar = $request->gambar;

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
        $user = User::find($id);
        unlink($user->gambar);
        $hapus = $user->delete();
        if ($hapus) {
            return redirect('/user');
        }
    }
}
