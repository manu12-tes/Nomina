<?php
namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario\Empleado;


class EmpleadoController extends Controller
{
    //
    public function alta()
    {
        return View('Usuario/Alta');
    }
    public function pago()
    {
        return View('Usuario/Pago');
    }

    public function altaP(Request $p)
    {
        $curp = $p->curp;
        $nombreempleado = $p->nombreempleado;
        $apellidopaternoemp = $p->apellidopaternoemp;
        $apellidomaternoemp = $p->apellidomaternoemp;
        $sexo = $p->sexo;
        $nss = $p->nss;
        $rfc = $p->rfc;
        $fecha = date('y-m-d');
        $puesto = $p->puesto;

        Empleado::create([
            'curp' => $curp, 'nombreEmpleado' => $nombreempleado, 'apellidoPaternoEmp' => $apellidopaternoemp,
            'apellidoMaternoEmp' => $apellidomaternoemp, 'sexo' => $sexo, 'nss' => $nss, 'RFC' => $rfc,
            'fechaContratacion' => $fecha, 'puesto' => $puesto

        ]);

        return redirect()->to('Alta');

    }
    public function editar($curp){
        $verE = Empleado::select('curp','nombreEmpleado','apellidoPaternoEmp','apellidoMaternoEmp',
        'sexo','nss','RFC','puesto')
        ->where('curp',$curp)
        ->first();

        return view('Usuario/editar')->with('empleado', $verE);

    }

    public function actE(Request $p3){
        $curp = $p3->curp;
        $nombreempleado = $p3->nombreempleado;
        $apellidopaternoemp = $p3->apellidopaternoemp;
        $apellidomaternoemp = $p3->apellidomaternoemp;
        $sexo = $p3->sexo;
        $nss = $p3->nss;
        $rfc = $p3->rfc;
        $puesto = $p3->puesto;

        $verE = Empleado::select('curp','nombreEmpleado','apellidoPaternoEmp','apellidoMaternoEmp',
        'sexo','nss','RFC','puesto')
        ->where('curp',$curp)
        ->update([
            'curp' => $curp, 'nombreEmpleado' => $nombreempleado, 'apellidoPaternoEmp' => $apellidopaternoemp,
            'apellidoMaternoEmp' => $apellidomaternoemp, 'sexo' => $sexo, 'nss' => $nss, 'RFC' => $rfc,
             'puesto' => $puesto

        ]);
        return redirect()->to('Nomina');
    }
    public function mostrarsueldo(){
        $verS = SueldoModel::all();

        return view('Usuario/sueldoEmp')->with('sueldoEmp',$verS);
    }

    
    
}