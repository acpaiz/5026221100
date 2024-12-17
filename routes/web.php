<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeyboardDBController;

Route::get('/', function () {
    return view('5026221100');
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
Route::get('/pegawai/delete/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

//route CRUD Keyboard f
Route::get('/keyboard','App\Http\Controllers\KeyboardDBController@index');
Route::get('/keyboard/tambah','App\Http\Controllers\KeyboardDBController@tambah');
Route::post('/keyboard/store','App\Http\Controllers\KeyboardDBController@store');

Route::get('/keyboard/edit/{id}','App\Http\Controllers\KeyboardDBController@edit');
Route::post('/keyboard/update','App\Http\Controllers\KeyboardDBController@update');
Route::get('/keyboard/delete/{id}','App\Http\Controllers\KeyboardDBController@hapus');
Route::get('/keyboard/cari','App\Http\Controllers\KeyboardDBController@cari');
Route::get('/keyboard/update-status','App\Http\Controllers\KeyboardDBController@updateStatus');

Route::patch('/keyboard/update-status/{kodekeyboard}', [KeyboardDBController::class, 'updateStatus']);

Route::get('/pagecounter','App\Http\Controllers\PagecounterController@index');

//latihan
// AA
Route::get('/chat','App\Http\Controllers\LatihanAAController@index');

// BB
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaDBController@index');
Route::get('/mahasiswa/edit/{id}','App\Http\Controllers\MahasiswaDBController@edit');
Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaDBController@update');
Route::get('/mahasiswa/read/{id}','App\Http\Controllers\MahasiswaDBController@read');

// CC
use App\Http\Controllers\KategoriController;
Route::get('/combo', [KategoriController::class, 'index'])->name('latihancc');
Route::post('/combo', [KategoriController::class, 'show'])->name('latihancckirim');

// UAS
Route::get('/uas','App\Http\Controllers\UASController@index');
Route::get('/uas/tambah','App\Http\Controllers\UASController@tambah');
Route::post('/uas/store','App\Http\Controllers\UASController@store');
