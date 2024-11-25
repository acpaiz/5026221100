<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/sercen', function () {
    return view('sercen');
});

Route::get('/linktree', function () {
    return view('LinkTreeISE24');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/responsive1', function () {
    return view('responsive1');
});

Route::get('/style', function () {
    return view('Style');
});

Route::get('/style2', function () {
    return view('Style 2');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/5026221199', function () {
    return view('5026221199');
});

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');
