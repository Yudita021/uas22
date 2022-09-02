<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\YghotelController;
use app\Http\Controllers\PesananController;
use app\Http\Controllers\PelangganController;

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

Route::get('/admin', 'App\Http\Controllers\PesananController@indexadmin');

// CRUD KAMAR HOTEL
Route::get('/admin/kamar', 'App\Http\Controllers\YghotelController@indexkamar');
Route::get('/admin/kamar/create', 'App\Http\Controllers\YghotelController@createkamar')->name('kamar.create');
Route::post('admin/kamar/store','App\Http\Controllers\YghotelController@storekamar')->name('kamar.store');
Route::get('admin/kamar/edit/{room}','App\Http\Controllers\YghotelController@editkamar')->name('kamar.edit');
Route::patch('admin/kamar/update/{room}', 'App\Http\Controllers\YghotelController@updatekamar')->name('kamar.update');
Route::delete('admin/kamar/delete/{room}', 'App\Http\Controllers\YghotelController@destroy')->name('kamar.remove');