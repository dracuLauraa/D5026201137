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
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('tugas5', function () {
    return view('tugas5js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2js') ;
});

Route::get('ets',"ViewController@ETS") ;

Route::get('php',"ViewController@PHP") ;

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/pensil','PensilController@index');
Route::get('/pensil/tambah','PensilController@tambah');
Route::post('/pensil/store','PensilController@store');
Route::get('/pensil/edit/{id}','PensilController@edit');
Route::post('/pensil/update','PensilController@update');
Route::get('/pensil/hapus/{id}','PensilController@hapus');
Route::get('/pensil/cari','PensilController@cari');
Route::get('/pensil/detail/{id}','PensilController@view');

Route::get('/eas','EasController@index');