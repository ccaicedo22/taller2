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
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/producto','App\Http\Controllers\ProductoController@index'); //mostrar los registros

Route::post('producto','App\Http\Controllers\ProductoController@store'); //crear un registro

Route::put('/producto/{id}','App\Http\Controllers\ProductoController@update'); //actualizar un registro

// Route::delete('/producto/{id}','App\Http\Controllers\ProductoController@destroy'); //eliminar un registro

Route::get('/alimentos','App\Http\Controllers\ProductoController@procedure'); 
Route::get('/juguetes','App\Http\Controllers\ProductoController@procedures'); 

Route::resource('producto',App\Http\Controllers\ProductoController::class);

// --------------------------------------------------------------------------

Route::put('/categoria/{id}','App\Http\Controllers\CategoriaController@update'); //actualizar un registro

Route::resource('categoria',App\Http\Controllers\CategoriaController::class);

Route::get('/categoria','App\Http\Controllers\CategoriaController@mostrartipo'); 

Route::get('categoria','App\Http\Controllers\CategoriaController@index'); 
// Route::post('/categoria','App\Http\Controllers\CategoriaController@store');