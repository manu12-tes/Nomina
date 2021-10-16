<?php
namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuario\Empleado;
use App\Models\Usuario\NominaModel;
use PDF;

class NominaController extends Controller
{
    public Function Nomina(){
    return view('Usuario/Nomina');
    }

    

    public function eliminar($curp)
        {
         $verInfo=Empleado::select('curp')
         ->where('curp',$curp)
         ->delete();

         return redirect()->to('Nomina');
         }  

    public Function mostrarDatosTabla(){
        $verInfo = Empleado::all();//

        return view('Usuario/Nomina')->with('empleado', $verInfo);
    }

    public Function Reporte(){
        return view('Usuario/Reporte');
    }



    public Function registroNomina(Request $p){
        $folio = $p->folio;
        $fechaDeposito = $p->fechaDeposito;
        $cantidad =$p->cantidad;
        $curp = $p->curp;

        NominaModel::create([
            'folio'=>$folio, 'fechaDeposito'=>$fechaDeposito,'cantidad'=>$cantidad, 'curp'=>$curp
        ]);

        return redirect()->to('Reporte');
        }

        public Function mostrarDatosTablaReporte(){
            $verInfoRep = NominaModel::all();
    
            return view('Usuario/Reporte')->with('reporte', $verInfoRep);
        }

    // Generar PDF
    public function createPDF() {
        // retreive all records from db
        $reporte= NominaModel::all();
  
        // share data to view
        view()->share('reporte',$reporte);
        $pdf = PDF::loadView('Usuario/Reporte', $reporte);
  
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
      
}

