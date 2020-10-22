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

Route::get('/', 'DashboardController@index');
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
Route::resource('/user', 'UserController');
Route::resource('/kegiatan', 'KegiatanController');

Route::get('/surat-keterangan-domisili/{id}/finish', 'SuratKeteranganDomisiliController@finish');
Route::get('/surat-keterangan-usaha/{id}/finish', 'SuratKeteranganUsahaController@finish');
Route::get('/surat-keterangan-tidak-mampu/{id}/finish', 'SuratKeteranganTidakMampuController@finish');
Route::resource('/surat-keterangan-domisili', 'SuratKeteranganDomisiliController')->only('show');
Route::resource('/surat-keterangan-usaha', 'SuratKeteranganUsahaController')->only('show');
Route::resource('/surat-keterangan-tidak-mampu', 'SuratKeteranganTidakMampuController')->only('show');
Route::get('/surat', 'SuratController@index');
