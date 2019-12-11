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

Route::get('/','Controller@inicio')->name('inicio');
Route::get('/comida-generada', 'Controller@generar')->name('generar-comida');
Route::get('/historial', 'Controller@historial')->name('historial');
