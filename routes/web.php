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
//Route::get('posts', 'Posts@list')->name('posts.list');


Route::get('posts', 'App\Http\Controllers\Posts@list')->name('posts');
Route::get('posts/{post:slug}', 'App\Http\Controllers\Posts@show')->name('posts.show');