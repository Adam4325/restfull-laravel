<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get("videos","VideosController@index");
Route::get("videos/{id}","VideosController@show");
Route::post("videos","VideosController@store");
Route::put("videos/{id}","VideosController@update");
Route::delete("videos/{id}","VideosController@destroy");
