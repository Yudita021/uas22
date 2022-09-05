<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\YghotelController;
use app\Http\Controllers\PesananController;

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

Route::get('/', 'App\Http\Controllers\PesananController@viewwelcome');

// CRUD KAMAR HOTEL
Route::get('/admin', 'App\Http\Controllers\PesananController@indexpesanan');
Route::get('/admin/kamar', 'App\Http\Controllers\YghotelController@indexkamar');
Route::get('/admin/kamar/create', 'App\Http\Controllers\YghotelController@createkamar')->name('kamar.create');
Route::post('admin/kamar/store','App\Http\Controllers\YghotelController@storekamar')->name('kamar.store');
Route::get('admin/kamar/edit/{room}','App\Http\Controllers\YghotelController@editkamar')->name('kamar.edit');
Route::patch('admin/kamar/update/{room}', 'App\Http\Controllers\YghotelController@updatekamar')->name('kamar.update');
Route::delete('admin/kamar/delete/{room}', 'App\Http\Controllers\YghotelController@destroy')->name('kamar.remove');

// PEMESANAN
Route::get('order/edit/{room}','App\Http\Controllers\PesananController@tampilkamar')->name('edit.edit');
Route::post('order/store','App\Http\Controllers\PesananController@storeorder')->name('order.store');
// Route::get('/order/create', 'App\Http\Controllers\PesananController@createorder')->name('order.create');
// Route::post('order/store','App\Http\Controllers\PesananController@storeorder')->name('order.store');
Route::get('/order', 'App\Http\Controllers\PesananController@vieworder');
Route::get('/order/view', 'App\Http\Controllers\PesananController@indexorder');
Route::get('/order/view/search', 'App\Http\Controllers\PesananController@search')->name('search');
Route::get('/admin/search', 'App\Http\Controllers\PesananController@searchadmin')->name('search.admin');

Route::get('admin/edit/{order}','App\Http\Controllers\PesananController@editpesanan')->name('pesanan.edit');
Route::patch('admin/update/{order}', 'App\Http\Controllers\PesananController@updatepesanan')->name('pesanan.update');