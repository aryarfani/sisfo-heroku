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
Route::get('/optimize', 'HelperController@optimize');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/migrate', 'HelperController@migrate');

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

    // User Routes
    // add user import
    Route::get('/user/{id}/approve-sell', 'UserController@approveSell');
    Route::post('/user/import', 'UserController@import');
    Route::resource('/user', 'UserController');

    // Loker Routes
    Route::resource('/loker', 'LokerController');
    Route::get('/loker/{id}/approve', 'LokerController@approve');
    Route::resource('/kegiatan', 'KegiatanController');
    Route::get('/kegiatan/{id}/approve', 'KegiatanController@approve');

    Route::resource('/info-desa', 'InfoDesaController');
    Route::resource('/info-bpd', 'InfoBpdController');

    Route::resource('/ojek', 'OjekController');
    Route::resource('/pasar', 'PasarController');

    // Surat Routes
    Route::get('/surat-keterangan-domisili/{id}/finish', 'SuratKeteranganDomisiliController@finish');
    Route::get('/surat-keterangan-usaha/{id}/finish', 'SuratKeteranganUsahaController@finish');
    Route::get('/surat-keterangan-tidak-mampu/{id}/finish', 'SuratKeteranganTidakMampuController@finish');
    Route::resource('/surat-keterangan-domisili', 'SuratKeteranganDomisiliController')->only('show');
    Route::resource('/surat-keterangan-usaha', 'SuratKeteranganUsahaController')->only('show');
    Route::resource('/surat-keterangan-tidak-mampu', 'SuratKeteranganTidakMampuController')->only('show');
    Route::get('/surat', 'SuratController@index');
});
