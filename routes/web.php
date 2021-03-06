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
    return view('form');
});


Route::post('/store','formController@store');
Route::get('/data','formController@show');
Route::get('/data/cari','formController@cari');
Route::get('/upload','uploadController@upload');
Route::post('/upload/proses','uploadController@proses_upload');
Route::get('/upload/hapus/{id}','uploadController@hapus');
Route::get('/promo','showPromoController@show');
Route::get('/promo/hapus/{id}','uploadController@hapus');
Route::get('/export','formController@export');
Route::get('/sendemail','sendEmailController@index');