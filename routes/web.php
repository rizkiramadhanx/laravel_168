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

Route::get('/1903040168', function () {
    return view('welcome');
});
Route::get('/', 'MahasiswaController@formulir');
Route::get('/formulir', 'MahasiswaController@formulir');
Route::get('/data-mahasiswa', 'MahasiswaController@dataMahasiswa');
Route::get('/formulir-bootstrap', 'MahasiswaController@formulirbt');
Route::post('formulir/form', 'MahasiswaController@form');
Route::get('/formulirbt/hapus/{no}', 'MahasiswaController@hapus');
Route::get('/formulir/hapus/{no}', 'MahasiswaController@hapus');
