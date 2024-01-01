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

Auth::routes(); //incluye las rutas de : #1 inicio de sesion #2 recuperacion de contrasenia #3 de registro 

Route::get('/home', 'HomeController@index')->name('home');
