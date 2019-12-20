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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/partidos', 'PartidoController@show');
Route::post('/partidos', 'PartidoController@store');
Route::delete('partidos/{id}', 'PartidoController@destroy');
Route::get('/partidos/{id}/edit', 'PartidoController@edit');
Route::post('/partidos/{id}/edit', 'PartidoController@update');

Route::get('/tipo-elecciones', 'TipoEleccionesController@show');
Route::post('/tipo-elecciones', 'TipoEleccionesController@store');
Route::delete('/tipo-elecciones/{id}', 'TipoEleccionesController@destroy');
Route::get('/tipo-elecciones/{id}/edit', 'TipoEleccionesController@edit');
Route::post('/tipo-elecciones/{id}/edit', 'TipoEleccionesController@update');
