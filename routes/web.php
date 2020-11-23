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


Auth::routes();
Route::redirect('/', '/dashboard');

Route::get('/optimize', function () {
    $output = [];
    \Artisan::call('optimize', $output);
    dd($output);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index');

    Route::resource('/berita', 'BeritaController');
    Route::resource('/berita-kategori', 'BeritaCategoryController');
    Route::resource('/produk', 'ProductController');
    Route::resource('/produk-kategori', 'ProductCategoryController');
    Route::resource('/produk-hukum', 'ProdukHukumController');
    Route::resource('/bumdes', 'BumdesController');
    Route::resource('/bumdes-kategori', 'BumdesCategoryController');
    Route::resource('/potensi', 'PotencyController');
    Route::resource('/potensi-kategori', 'PotencyCategoryController');
    Route::resource('/nomer-penting', 'ImportantNumberController');
    Route::resource('/user', 'UserController');
    Route::resource('/loker', 'LokerController');
    Route::get('/loker/{id}/approve', 'LokerController@approve');
    Route::resource('/kegiatan', 'KegiatanController');
    Route::get('/kegiatan/{id}/approve', 'KegiatanController@approve');

    Route::resource('/info-desa', 'InfoDesaController');
    Route::resource('/info-bpd', 'InfoBpdController');

    Route::resource('/ojek', 'OjekController');
    Route::resource('/pasar', 'PasarController');


    Route::get('/surat-keterangan-domisili/{id}/finish', 'SuratKeteranganDomisiliController@finish');
    Route::get('/surat-keterangan-usaha/{id}/finish', 'SuratKeteranganUsahaController@finish');
    Route::get('/surat-keterangan-tidak-mampu/{id}/finish', 'SuratKeteranganTidakMampuController@finish');
    Route::resource('/surat-keterangan-domisili', 'SuratKeteranganDomisiliController')->only('show');
    Route::resource('/surat-keterangan-usaha', 'SuratKeteranganUsahaController')->only('show');
    Route::resource('/surat-keterangan-tidak-mampu', 'SuratKeteranganTidakMampuController')->only('show');
    Route::get('/surat', 'SuratController@index');
});
