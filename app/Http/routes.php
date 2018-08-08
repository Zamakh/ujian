<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/soal2', function(){
	return view('./soal2/soal2');
});*/

Route::get('soal2', 'simpan_peserta@index');
Route::post('simpan', 'simpan_peserta@store');
Route::get('soal2_1', 'simpan_peserta@show');
