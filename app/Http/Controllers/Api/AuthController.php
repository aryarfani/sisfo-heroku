<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function register(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'gambar' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'nomer_hp' => 'required',
            'pekerjaan' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->agama = $request->agama;
        $user->status = $request->status;
        $user->nomer_hp = $request->nomer_hp;
        $user->pekerjaan = $request->pekerjaan;
        $user->password = bcrypt($request->password);

        if (isset($request->gambar)) {
            $directory = 'assets/images/home';
            $file = $request->file('gambar');
            $file->move($directory, $file->getClientOriginalName());
            $user->gambar = $directory . "/" . $file->getClientOriginalName();
        }
        $user->save();


        return response()->json($user);
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['nik', 'password']);

        if (!$token = Auth::guard('user')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
    public function getAuthUser()
    {
        return response()->json(Auth::guard('user')->user());
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }
}
