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
                'username' => 'required',
                'nik' => 'required',
                'password' => 'required',
            ]);

            $user = new User;
            $user->nik = $request->nik;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);

            if (isset($request->image)) {
                $directory = 'assets/images/home';
                $file = $request->file('image');
                $file->move($directory, $file->getClientOriginalName());
                $user->image = $directory . "/" . $file->getClientOriginalName();
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
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
        $hapus = $user->delete();
        if ($hapus) {
            return redirect('/user');
        }
    }
}
