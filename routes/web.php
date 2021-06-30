<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;

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


Route::get('/', 'PegController@list');

Route::post('/simpan', 'PegController@simpan');
Route::get('/hapus/{id}', 'PegController@hapus');
Route::get('/ubah/{id}', 'PegController@ubah');
Route::post('/ubah-surat', 'PegController@rubah');
Route::get('/tambah', 'PegController@tambah');
Route::post('/simpan', 'PegController@simpan');
Route::get('/cetak', 'PegController@cetak');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
