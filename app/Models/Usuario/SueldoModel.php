<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SueldoModel extends Model
{
    use HasFactory;

    protected $table = 'empleado_sueldo';
    protected $primarykey = 'curp';
    public $timestamps = false;
    protected $fillable= [
        'curp', 'sueldoDiario', 'periodoPago'
    ];
}