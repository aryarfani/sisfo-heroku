<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\InfoDesa;

class InfoDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = InfoDesa::first();
        return response()->json($data);
    }
}
