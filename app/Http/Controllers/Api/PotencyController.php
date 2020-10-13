<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Potency;

class PotencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $potency = Potency::all();
        return response()->json($potency);
    }
}
