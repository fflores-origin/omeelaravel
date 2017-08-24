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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


// HOME
Route::get('/', 'Home\HomeController@index');


// USER

Route::get('login', function () {
    return view('user\login');
});

//CONTACTO

Route::get('contacto', function () {
    return view('contacto.index');
});

Route::post('contacto', 'ContactoController@mensaje');

//PROFESIONALES

Route::get('profesionales', function () {
    return view('profesionales.index');
});

Route::get('profesionales/{id}', function ($id) {
    return view('profesionales.alumno', ['id'=> $id]);
});