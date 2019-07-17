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
Route::get('/lost', 'FormAnimalController@index');
Route::post('/lost', 'AddAnimalController@store');
Route::get('/found', 'FormAnimalController@index');
Route::post('/found', 'AddAnimalController@store');

Route::get('/monCompte/dashboard', 'MonCompteController@index');
Route::get('/monCompte/addAnimal', 'MonCompteController@form');
Route::post('/monCompte/addAnimal', 'AddAnimalController@store');


Route::get('/card', 'CardController@index');
Route::get('/color', 'ListController@filterColor')->name('color');
Route::get('/search', 'ListController@search')->name('search');
Route::get('/race', 'ListController@race')->name('race');
Route::post('/filter', 'ListController@filter')->name('filter');
Route::get('/list', 'ListController@index')->name('list');
Route::post('/ajaxMapList', 'ListController@ajaxMapList');
Route::post('/abc', 'ListController@filter');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');


