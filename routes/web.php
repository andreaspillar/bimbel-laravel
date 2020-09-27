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
    if(Auth::check()){
        return redirect('/siswa');
    }
    else{
        return view('welcome');
    }
});

Route::get('/home', function () {
    if(Auth::check()){
        return redirect('/guru');
    }
    else{
        return view('welcome');
    }
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('siswa', 'SiswaController');
    Route::resource('guru', 'GuruController');
    Route::resource('kelas', 'KelasController');
    Route::resource('mapel', 'MataPelajaranController');
    Route::resource('absen', 'AbsensiController');
    Route::get('absen/{absen}/nilai', 'AbsensiController@nilai')->name('absen.nilai');
});


