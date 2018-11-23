<?php

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
    return view('user.welcome');
});

Route::get('/masuk','authController@masuk');
Route::post('/masuk','authController@loginkan');
Route::post('/daftar','authController@daftarkan');
Route::get('/daftar','authController@daftar');


// User Area
Route::get('/dashboard','userController@dashboard');
Route::get('/cari_dokter','userController@cari_dokter');
Route::get('/cek_jadwal','userController@cek_jadwal');
Route::get('/cek_kesehatan','userController@diagnose');
Route::get('/hasil_cari_dokter','userController@hasil');

//  Admin Area
Route::get('/admin','adminController@admin');
Route::get('/data_dokter','adminController@data_dokter');
Route::get('/tambah_data_dokter','adminController@tambah');
Route::get('/data_ai','adminController@ai');
