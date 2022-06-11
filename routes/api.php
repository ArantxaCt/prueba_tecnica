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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/hosts/all','App\Http\Controllers\HostController@index'); //listar mis host
// Route::post('/hosts/create', 'App\Http\Controllers\HostController@store'); //creo mis host

// Route::get('/habitaciones/all','App\Http\Controllers\HabitacionController@index'); //listar mis habitaciones
// Route::post('/habitaciones/create', 'App\Http\Controllers\HabitacionController@store'); //creo mis habitaciones

// Route::get('/tipo_habitaciones/all','App\Http\Controllers\TipoHabitacionController@index'); //listar mis tipo_habitaciones
// Route::post('/tipo_habitaciones/create', 'App\Http\Controllers\TipoHabitacionController@store'); //creo mis tipo_habitaciones

Route::resource('/habitaciones', 'App\Http\Controllers\HabitacionController');
Route::resource('/hosts', 'App\Http\Controllers\HostController');
Route::resource('/tipo_habitaciones', 'App\Http\Controllers\TipoHabitacionController');