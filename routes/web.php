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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Dashboard', 'DashboardController');

Route::get('/baju', 'BajuController@index')->name ('baju');
Route::get('addbaju', 'BajuController@create');
Route::get('/addbaju', 'BajuController@addbaju')->name ('addbaju');

Route::resource('/jaket', 'JaketController');
Route::resource('/hodie', 'HodieController');
Route::resource('/kemeja', 'KemejaController');

// Route::resource('/bahan', 'BahanController@createbahan')->name('createbahan');

Route::resource('/sablon', 'SablonController');

Route::resource('transaksi', 'TransaksiController');

Route::get('/bahan', 'BahanController@index')->name ('bahan');
Route::get('/addbahan', 'BahanController@addbahan')->name ('addbahan');

/*Route::get('/chat', 'ChatController');*/

