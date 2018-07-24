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

Route::get('/', 'AlumnosController@home');

Route::get('agregar', 'AlumnosController@create');

Route::get('guardar', 'AlumnosController@store');

Route::get('modificar', 'AlumnosController@edit');

Route::get('actualizar', 'AlumnosController@update');

Route::get('eliminar', 'AlumnosController@delete');
    
Route::get('buscar', 'AlumnosController@search');
