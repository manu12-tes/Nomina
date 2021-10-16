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

Route::get('Nomina','App\Http\Controllers\Usuario\NominaController@Nomina');
Route::post('Nomina','App\Http\Controllers\Usuario\NominaController@empleadoTabla');
Route::get('Nomina','App\Http\Controllers\Usuario\NominaController@mostrarDatosTabla');

Route::get('Reporte','App\Http\Controllers\Usuario\NominaController@Reporte');
Route::post('Reporte','App\Http\Controllers\Usuario\NominaController@registroNomina');
Route::get('Reporte','App\Http\Controllers\Usuario\NominaController@mostrarDatosTablaReporte');

Route::get('Alta','App\Http\Controllers\Usuario\EmpleadoController@alta');
Route::post('AltaP','App\Http\Controllers\Usuario\EmpleadoController@altaP');

route::get('eliminar/{curp}','App\Http\Controllers\Usuario\NominaController@eliminar');

Route::get('pdf','App\Http\Controllers\Usuario\NominaController@createPDF');

Route::get('editar/{curp}','App\Http\Controllers\Usuario\EmpleadoController@editar');

Route::post('actE','App\Http\Controllers\Usuario\EmpleadoController@actE');
Route::get('sueldoEmp','App\Http\Controllers\Usuario\EmpleadoController@mostrarsueldo');

Route::get('pago','App\Http\Controllers\Usuario\EmpleadoController@pago');

Notification::Route ('telegram','-537948389')
   ->notify(new App\Http\Controllers\Api\telegramControl());