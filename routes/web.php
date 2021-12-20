<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');


// Route::get('storeprocedure','App\Http\Controllers\ProductoController@store');

// Route::get('/storecategoria', function () {
//     $producto = DB::select(''); 
//    return view('welcome'); });

//    Route::get('/allproductos', function () {
//     $productos = DB::select('call sp_allproducto()'); 
//    return view('/product/store')->with('productos', $productos);
//  });

 Route::get('/allalimentos','App\Http\Controllers\ProductoController@procedure');

 Route::get('/alljuguetes','App\Http\Controllers\ProductoController@procedures');