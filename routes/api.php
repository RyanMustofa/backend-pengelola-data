<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login','UserController@login');
Route::post('/register','UserController@register');
//formulir
Route::get('/formulir','FormulirController@index');
Route::post('/formulir','FormulirController@store');
Route::put('/formulir/{id}','FormulirController@update');
Route::get('/formulir/{id}','FormulirController@show');
Route::delete('/formulir/{id}','FormulirController@destroy');
//guru
Route::get('/guru','GuruController@index');
Route::get('/guru/{id}','GuruController@show');
Route::post('/guru','GuruController@store');
Route::put('/guru/{id}','GuruController@update');
Route::delete('/guru/{id}','GuruController@destroy');
//pembayaran
Route::get('/pembayaran','PembayaranController@index');
Route::get('/pembayaran/{id}','PembayaranController@show');
Route::post('/pembayaran','PembayaranController@store');
Route::put('/pembayaran/{id}','PembayaranController@update');
Route::delete('/pembayaran/{id}','PembayaranController@destroy');
