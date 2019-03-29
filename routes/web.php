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
<<<<<<< HEAD
Route::get('cadastrar', 'UserController@create');
=======

>>>>>>> 73bbcf88b77d51d418ca37be1049baa1bff890cc
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
