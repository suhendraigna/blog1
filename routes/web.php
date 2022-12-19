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

Route::get('/hendra', function(){
    return 'Selamat datang hendra';
});

Route::get('/article', 'ArticleController@index');
Route::get('/article/create', 'ArticleController@create');
Route::get('/article/{slug}', 'ArticleController@show');
Route::post('/article', 'ArticleController@store');
