<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoModel extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $primarykey = 'curp';
    public $timestamps = false;
    protected $fillable= [
        'curp', 'nombre', 'apellidoPaternoEmp','apellidoMaternoEmp','sexo','nss','RFC','fechaContratacion','puesto'
    ];
}