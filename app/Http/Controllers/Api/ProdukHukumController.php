<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ProdukHukum;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $data = ProdukHukum::get();
        return response()->json(['data' => $data]);
    }
}
