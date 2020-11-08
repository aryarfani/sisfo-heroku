<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $data = ProductCategory::all();
        return response()->json($data);
    }
}
