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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('home.index');
});

Route::resource('home', 'HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');

Route::get('/forms/animals', 'FormAnimalController@index');
Route::get('/forms/signup', 'FormInscriController@index')->name('Inscription');
Route::get('/mon-compte/dashboard', 'MonCompteController@index')->name('MonCompte')->middleware('auth');
Route::get('/mon-compte/addAnimal', 'MonCompteController@form');
Route::get('/card', 'CardController@index')->name('card');
Route::get('/list', 'ListController@index')->name('list');
Route::get('/search', 'ListController@search')->name('search');
Route::get('/color', 'ListController@filterColor')->name('color');

//Toutes pour Auth login & logout
Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::get('logout', 'Auth\LoginController@logout');
>>>>>>> Stashed changes
