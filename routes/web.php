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

Route::get('/links', function () {
    return view('links');
});

Route::resource('requerimiento', 'RequerimientoController');
Route::resource('cliente', 'ClienteController');
Route::resource('anydesk', 'AnydeskController');
Route::resource('pendiente', 'PendienteController');
Route::resource('terminado', 'TerminadoController');
Route::resource('proceso','ProcesoController');
