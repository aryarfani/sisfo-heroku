<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ImportantNumber;

class ImportantNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $product = ImportantNumber::all();
        return response()->json($product);
    }
}
