<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
