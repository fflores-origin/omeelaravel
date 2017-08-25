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


Route::get('generateAdmin', function() {
	$user = new App\User;
	$user->name = 'admin';
	$user->email = 'pachu.flores@gmail.com';
	$user->password = bcrypt('Novedad.2017');
	$user->save();

	return $user;
});


// HOME
Route::get('/', ['as' => 'home' , 'uses' => 'Home\HomeController@index']);

// AUTH

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

//CONTACTO

Route::get('contacto', function () {
    return view('contacto.index');
});

Route::post('contacto', 'ContactoController@mensaje');

//PROFESIONALES

Route::get('profesionales', function () {  return view('profesionales.index'); });
Route::get('profesionales/{id}', function ($id) { return view('profesionales.alumno', ['id'=> $id]);});


//ESCUELA
Route::get('escuelas' , ['as' => 'escuelas' , 'uses' => 'EscuelasController@index']);
Route::get('escuelas/create', ['as' => 'escuelas.create', 'uses' => 'EscuelasController@create']);


//CERTIFICACION
Route::get('certificados', ['as' => 'certificados', 'uses' => 'CertificacionController@create']);