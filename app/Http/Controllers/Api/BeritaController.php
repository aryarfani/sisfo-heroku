<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\News;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = News::all();
        return response()->json($data);
    }
}
