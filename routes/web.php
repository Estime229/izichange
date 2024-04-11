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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', 'App\Http\Controllers\ProductController@index');

Route::post('/product/new', 'App\Http\Controllers\ProductController@create');

Route::get('/product/new', 'App\Http\Controllers\ProductController@new');


