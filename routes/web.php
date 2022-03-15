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

Route::view('/', 'home')->name('home');
Route::view('/products', 'products')->name('products');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/shopcart', 'shopcart')->name('shopcart');

