<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario\EmpleadoModel;
use App\Models\Usuario\NominaModel;

class controlApi extends Controller{

    public Function mostrarEmpleadoApi(Request $request){
        $verInfo = EmpleadoModel::all();

        return $verInfo;
    }

    
    public function empPago(Request $request){
        $bus=$request->input('periodo');
        $veremP= EmpleadoModel::join("empleado_sueldo","empleado_sueldo.curp","=","empleado.curp")
                                   ->select("*")
                                   ->where("empleado_sueldo.periodoPago","=",$bus)
                                   ->get();
        return $veremP;
    }
    public function consulFecha(Request $request){
        $fecha1=$request->input('fecha1');
        $fecha2=$request->input('fecha2');
        $ver=EmpleadoModel:: join("nomina","nomina.curp","=","empleado.curp")
                               ->select("empleado.curp","empleado.nombreEmpleado","empleado.apellidoPaternoEmp","nomina.folio","nomina.cantidad","nomina.fechaDeposito")
                               ->whereBetween("nomina.fechaDeposito" , [$fecha1,$fecha2])
                               ->get();
        return $ver;
    }
}