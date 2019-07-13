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
Route::get('/forms/inscriptions', 'FormInscriController@index');

Route::get('/mon-compte', 'MonCompteController@index');

Route::get('/card', function(){
    return view('card.index');
});

Route::get('/list', function(){
    return view('list.index');
});

Route::get('/card', 'CardController@index');

Route::get('/list', 'ListController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');