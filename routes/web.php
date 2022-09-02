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