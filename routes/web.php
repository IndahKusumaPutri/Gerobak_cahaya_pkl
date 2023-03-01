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

Route::get('/login', function () {
    return view('login.index');
})->name('login')->middleware('guest');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout','LoginController@logout')->name('logout');

Route::get('/beranda', 'BerandaController@index')->middleware('auth');


// Pemohon
Route::get('/pemohon', 'PemohonController@index')->name('pemohon')->middleware('auth');
Route::get('/pemohon/create', 'PemohonController@create')->middleware('auth');
Route::post('/pemohon/store', 'PemohonController@store')->middleware('auth');
Route::get('/pemohon/status/{id}', 'PemohonController@status')->middleware('auth');
Route::get('/pemohon/show/{id}','PemohonController@show')->middleware('auth');
Route::get('/pemohon/edit/{id}', 'PemohonController@edit')->middleware('auth');
Route::put('/pemohon/update/{id}', 'PemohonController@update')->middleware('auth');
Route::get('/pemohon/destroy/{id}', 'PemohonController@destroy')->middleware('auth');
Route::get('/cetak-pemohon', 'PemohonController@cetakPemohon')->name('cetak-pemohon')->middleware('auth');
Route::get('/cetak-data-pemohon-form', 'PemohonController@cetakForm')->name('cetak-data-pemohon-form')->middleware('auth');
Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}', 'PemohonController@cetakPemohonPertanggal')->name('cetak-data-pertanggal')->middleware('auth');

// Survey
Route::get('/survey', 'SurveyController@index')->name('survey')->middleware('auth');
Route::get('/survey/status/{id}', 'SurveyController@status')->middleware('auth');
Route::get('/survey/create', 'SurveyController@create')->middleware('auth');
Route::post('/survey/store', 'SurveyController@store')->middleware('auth');
Route::get('/survey/show/{id}','SurveyController@show')->middleware('auth');
Route::get('/survey/destroy/{id}', 'SurveyController@destroy')->middleware('auth');

// Galeri
Route::get('/galeri', 'GaleriController@index')->name('galeri')->middleware('auth');
Route::get('/galeri/create', 'GaleriController@create')->middleware('auth');
Route::post('/galeri/store', 'GaleriController@store')->middleware('auth');
Route::get('/galeri/edit/{id}', 'GaleriController@edit')->middleware('auth');
Route::get('/galeri/update/{id}', 'GaleriController@update')->middleware('auth');
Route::get('/galeri/destroy/{id}', 'GaleriController@destroy')->middleware('auth');













