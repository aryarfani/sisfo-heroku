<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Bumdes;

class BumdesController extends Controller
{
    public function index()
    {
        $data = Bumdes::get();
        return response()->json(['data' => $data]);
    }
}
