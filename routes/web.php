<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');
Route::get('logout', 'LogController@logout');

Route::get('password/email', 'Auth/PasswordController@getEmail');
Route::post('password/email', 'Auth/PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth/PasswordController@getReset');
Route::post('password/reset', 'Auth/PasswordController@postReset');

Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LogController');
Route::resource('genero','GeneroController');
Route::resource('pelicula','MovieController');
Route::resource('mail', 'MailController');

Auth::routes();

Route::get('/home', 'HomeController@index');
