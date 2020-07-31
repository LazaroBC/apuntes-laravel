<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/nueva_ruta','FrontController@nuevaRuta');
Route::get('/ejemplo/{id}','EjemploController@index');
Route::get('/','PaginasController@inicio');
Route::get('/inicio','PaginasController@inicio');
Route::get('/quienes_somos','PaginasController@quienes_somos');
Route::get('/donde_estamos','PaginasController@donde_estamos');
Route::get('/foro','PaginasController@foro'); */

Route::resource("posts", "EjemploController");

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return 'Esta es el post nº: ' . $id . '. Creado por ' . $nombre;
})->where('nombre','[a-z]+');



