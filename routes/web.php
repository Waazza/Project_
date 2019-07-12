<?php

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

Route::get('/card', 'CardController@index');

Route::get('/list', 'ListController@index');
Route::get('/search', 'ListController@search')->name('search');
Route::get('/color', 'ListController@filterColor')->name('color');
