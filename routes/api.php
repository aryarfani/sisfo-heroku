<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// user route
Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');
Route::get('logout', 'Api\AuthController@logout');
Route::get('user', 'Api\AuthController@getAuthUser');

Route::group(['middleware' => 'jwtMiddleware'], function () {
    Route::get('berita', 'Api\BeritaController@index');
    Route::get('produk', 'Api\ProductController@index');
    Route::get('potensi', 'Api\PotencyController@index');
    Route::get('nomer-penting', 'Api\ImportantNumberController@index');

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
});
