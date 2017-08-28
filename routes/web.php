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

// HOME
Route::get('/', [
			'as' => '/', 
			'uses' => 'Home\HomeController@index']
		);

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

Route::get('profesionales', ['as' => 'profesionales', 'uses' => 'ProfesionalesController@index']);
Route::get('profesionales/create', ['as' => 'prof-create', 'uses' => 'ProfesionalesController@create']);
Route::get('profesionales/{id}', function ($id) { return view('profesionales.alumno', ['id'=> $id]);});
Route::post('profesionales', 'ProfesionalesController@store');

//ESCUELA
Route::get('escuelas' , ['as' => 'escuelas' , 'uses' => 'EscuelasController@index']);
Route::get('escuelas/create', ['as' => 'escuelas.create', 'uses' => 'EscuelasController@create']);
Route::post('escuela', 'EscuelasController@store');


//CERTIFICACION
Route::get('certificados', ['as' => 'certificados', 'uses' => 'CertificacionController@create']);

//ADMIN
Route::get( 'admin' , [
			'as' => 'admin-index', 
			'uses' => 'AdminController@index'
			]);

Route::get('admin/profesionales', [
	'as' => 'admin-profesionales', 
	'uses' => 'AdminController@matriculados'
	]);


