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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animales', 'AnimalController@index');
Route::group(['prefix' => 'animal'], function () {
    Route::post('guardar', 'AnimalController@store');
    Route::get('editar/{id}', 'AnimalController@edit');
    Route::post('actualizar/{id}', 'AnimalController@update');
    Route::delete('eliminar/{id}', 'AnimalController@destroy');
});
