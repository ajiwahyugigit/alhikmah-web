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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/simpanan', 'SimpananController@index')->name('simpanan');

// pembiayaan
Route::get('/pembiayaan-mub', 'PembiyaanController@index')->name('pembiyaanmub');
Route::get('/pembiayaan-beb', 'PembiyaanController@beb')->name('pembiayaanbeb');
Route::get('/pembiayaan-kbb', 'PembiyaanController@kbb')->name('pembiayaankbb');
Route::get('/pembiayaan-mab', 'PembiyaanController@mab')->name('pembiayaanmab');
Route::get('/pembiayaan-uhb', 'PembiyaanController@uhb')->name('pembiayaanuhb');

Route::get('/penyaluran-ziswaf', 'PenyaluranziswafController@index')->name('penyaluranziswaf');
Route::get('/daftar', 'DaftarController@index')->name('daftar');

