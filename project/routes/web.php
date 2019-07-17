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
    return view('home.index');
});
Route::get('/forms/animals', 'FormAnimalController@index');
Route::get('/forms/signup', 'FormInscriController@index');

Route::get('/mon-compte/dashboard', 'MonCompteController@index');
Route::get('/mon-compte/addAnimal', 'MonCompteController@form');


Route::get('/card', 'CardController@index');

Route::get('/list', 'ListController@index')->name('list');
Route::get('/search', 'ListController@search')->name('search');
Route::get('/color', 'ListController@filterColor')->name('color');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');
