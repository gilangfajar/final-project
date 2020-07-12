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

Route::get('/master', function () {
    return view('template.master');
});

Route::get('/beranda', function () {
    return view('Beranda.index');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data

Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail item dengan id
// Route::get('/jawaban/create', 'JawabanController@create'); //menampilkan halaman form
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index'); //menampilkan semua

Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store'); //menyimpan data

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); //menampilkan semua

Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //menampilkan semua

Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete'); //menampilkan semua

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
