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
//Route::get('/','index.');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//Route::get("pacientes","PacienteController@index");
//Route::get("pacientes/{id}","PacienteController@show");
//Route::post("pacientes","PacienteController@store");
//Route::put("pacientes/{id}","PacienteController@update");
//Route::delete("pacientes/{id}","PacienteController@destroy");
resource('pacientes','PacienteController');
resource('citas','CitasController');