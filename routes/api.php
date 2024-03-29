<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// user route
Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');
Route::get('logout', 'Api\AuthController@logout');
Route::get('user', 'Api\AuthController@getAuthUser');

// route for unregistered user to get pasar
Route::get('all-pasar', 'Api\PasarController@allIndex');

Route::group(['middleware' => 'jwtMiddleware'], function () {
    Route::get('berita', 'Api\BeritaController@index');
    Route::get('produk', 'Api\ProductController@index');
    Route::get('produk-kategori', 'Api\ProductCategoryController@index');
    Route::get('potensi', 'Api\PotencyController@index');
    Route::get('nomer-penting', 'Api\ImportantNumberController@index');
    Route::get('info-desa', 'Api\InfoDesaController@index');
    Route::get('info-bpd', 'Api\InfoBpdController@index');

    // route surat
    Route::post('surat-usaha', 'Api\SuratKeteranganUsahaController@store');
    Route::post('surat-domisili', 'Api\SuratKeteranganDomisiliController@store');
    Route::post('surat-tidak-mampu', 'Api\SuratKeteranganTidakMampuController@store');
    Route::get('surat', 'Api\SuratController@index');

    // route kegiatan
    Route::post('kegiatan', 'Api\KegiatanController@store');
    Route::get('kegiatan', 'Api\KegiatanController@index');

    //route getAllUser
    Route::get('data-agama', 'Api\GrafikController@getAgama');
    Route::get('data-gender', 'Api\GrafikController@getGender');

    // route bumdes
    Route::get('bumdes', 'Api\BumdesController@index');

    // route produk-hukum
    Route::get('produk-hukum', 'Api\ProdukHukumController@index');

    // route pasar
    Route::post('pasar', 'Api\PasarController@store');
    Route::delete('pasar/{id}/delete', 'Api\PasarController@destroy');
    Route::get('pasar', 'Api\PasarController@index');
    Route::get('pasar/user', 'Api\PasarController@indexUser');

    // route ojek
    Route::post('ojek', 'Api\OjekController@store');
    Route::get('ojek', 'Api\OjekController@index');
    Route::delete('ojek/user/delete', 'Api\OjekController@destroy');
    Route::get('ojek/user', 'Api\OjekController@indexUser');

    // route jasa
    Route::post('loker', 'Api\LokerController@store');
    Route::get('loker', 'Api\LokerController@index');
    Route::delete('loker/{id}/delete', 'Api\LokerController@destroy');
    Route::get('loker/user', 'Api\LokerController@indexUser');
});
