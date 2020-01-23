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

// Route::get('/alumno','AlumnoController@index');

Route::resource('alumnos','AlumnosController');

// Route::resource('alumnos/create','AlumnosController@create');

Route::get('/alumnos/create', function () {
    return view('alumnos.create');
});







