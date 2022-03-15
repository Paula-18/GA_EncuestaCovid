<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/prueba', function () {
    $respuesta = array();
    $respuesta["nombre"] = "Paula";
    $respuesta["apellidos"] = "Remy";
    return $respuesta;
});*/

Route::post('/respuestas', 
    'Api\RespuestasController@store')->
    name('api.respuestas.store');
    
Route::get('/tiposusuario',
    'Api\TiposUsuarioController@index')->
    name('api.tiposusuario.index');

Route::get('/sintomas', 
    'Api\SintomasController@index')->
    name('api.sintomas.index');