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
Route::resource('registrosARD', 'registros\RegistrosController');
Route::resource('variablesARD', 'variables\VariablesController');

// sectorizacion controller
Route::resource('Localidades', 'localidad\LocalidadController');
Route::resource('Recintos',   'recintos\RecintosController');
Route::resource('Tipo_recinto', 'tipo_recinto\Tipo_recintoController');
Route::resource('Arduino', 'arduinos\ArduinoController');