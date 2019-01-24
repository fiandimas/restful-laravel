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


// Post route
Route::post('/kontak','ControllerKotak@index');
Route::post('/kontak/{id}','ControllerKotak@show');
Route::post('/kontak/store','ControllerKotak@store');
Route::post('/kontak/update/{id}','ControllerKotak@update');
Route::post('/kontak/destroy/{id}','ControllerKotak@destroy');
