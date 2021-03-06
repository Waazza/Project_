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
Route::get('/forms/animals', 'FormAnimalController@index');

Route::get('/monCompte/dashboard', 'MonCompteController@index');

Route::get('/card', function(){
    return view('card.index');
});

Route::get('/list', function(){
    return view('list.index');
});

Route::get('/card', 'CardController@index');

Route::get('/list', 'ListController@index');

