<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function optimize()
    {
        $output = [];
        \Artisan::call('optimize', $output);
        dd($output);
    }

    public function migrate()
    {
        $output = [];
        \Artisan::call('migrate', ['--force' => true]);
        dd($output);
    }
}
