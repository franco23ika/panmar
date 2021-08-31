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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio','IndexControlle@index')->name('inicio');
Route::get('/punto-de-venta' , 'VentaController@index')->name('venta');
Route::get('/producto' , 'ProductoController@index')->name('producto');
Route::post('/delete-full' , 'ProductoController@dlete_full');
