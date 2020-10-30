<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Ojek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OjekController extends Controller
{

    public function index()
    {
        $data = Ojek::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nomer_plat' => 'required',
            'nomer_hp' => 'required',
        ]);

        $ojek = new Ojek;
        $ojek->user_id = Auth::guard('user')->user()->id;
        $ojek->nomer_plat = $request->nomer_plat;
        $ojek->nomer_hp = $request->nomer_hp;

        $ojek->save();

        return response()->json($ojek);
    }

    // get the index only for logged user
    public function indexUser()
    {
        $data = Ojek::where('user_id', '=', Auth::guard('user')->user()->id)->first();
        return response()->json($data);
    }

    public function destroy()
    {
        $data = Ojek::where('user_id', '=', Auth::guard('user')->user()->id)->first();
        $hapus = $data->delete();
        if ($hapus) {
            return response()->json();
        }
        return response()->json('error', 400);
    }
}
