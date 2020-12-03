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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home");

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home");

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name("login");

Route::post('/login', 'App\Http\Controllers\LoginController@checkLogin')->name("checkLogin");

Route::post('/home/add-cart/{id?}', 'App\Http\Controllers\HomeController@addCart')->name("addCart");

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart");

Route::get('/order', 'App\Http\Controllers\OrderController@index')->name("order");
