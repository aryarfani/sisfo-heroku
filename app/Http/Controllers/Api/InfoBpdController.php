<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\InfoBpd;

class InfoBpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = InfoBpd::first();
        return response()->json($data);
    }
}
