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


