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
            'plat_nomer' => 'required',
            'nomer_hp' => 'required',
        ]);

        $ojek = new Ojek;
        $ojek->user_id = Auth::guard('user')->user()->id;
        $ojek->plat_nomer = $request->plat_nomer;
        $ojek->nomer_hp = $request->nomer_hp;

        $ojek->save();

        return response()->json($ojek);
    }
}
