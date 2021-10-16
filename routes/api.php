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

Route::post('mte','App\Http\Controllers\Api\controlApi@mostrarEmpleadoApi');
Route::post('ie','App\Http\Controllers\Api\controlApi@inserEmpApi');


Route::post('periodo','App\Http\Controllers\Api\controlApi@empPago');
Route::post('fecha','App\Http\Controllers\Api\controlApi@consulFecha');