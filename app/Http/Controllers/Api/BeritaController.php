<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return DB::table('news')
            ->join('news_category', 'news_category.id', '=', 'news_category')
            ->select('news.*', 'news_category.name as news_category_name')
            ->get();
    }
}
