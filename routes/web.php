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
    return view('usuario.welcome');
});

Route::get('/usuario', function () {
    return view('usuario.create');
});

Route::get('/usuario', function () {
    return view('usuario.formulario');
});
*/
Route::get('/eje1', function () {
    return view('usuario.ejercicio1');
});

Route::get('/eje2', function () {
    return view('usuario.ejercicio2');
});

Route::get('/eje3', function () {
    return view('usuario.ejercicio3');
});

Route::resource('usuario', 'UsuarioController');