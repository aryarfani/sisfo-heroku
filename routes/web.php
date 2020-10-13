<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/dashboard', 'DashboardController');
Route::resource('/visi-misi', 'VisiMisiController');
Route::resource('/sejarah-desa', 'SejarahDesaController');
Route::resource('/staff-kategori', 'StaffCategoryController');
Route::resource('/staff', 'StaffController');
Route::resource('/berita', 'BeritaController');
Route::resource('/berita-kategori', 'BeritaCategoryController');
Route::resource('/produk', 'ProductController');
Route::resource('/produk-kategori', 'ProductCategoryController');
Route::resource('/potensi', 'PotencyController');
Route::resource('/potensi-kategori', 'PotencyCategoryController');
Route::resource('/nomer-penting', 'ImportantNumberController');
Route::resource('/surat', 'SuratKeteranganUsahaController');

// Route::get('surat/{id}', );
