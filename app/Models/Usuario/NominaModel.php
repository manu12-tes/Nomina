<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NominaModel extends Model
{
    use HasFactory;

    protected $table = 'nomina';
    protected $primarykey = 'folio';
    public $timestamps = false;
    protected $fillable= [
        'folio', 'fechaDeposito', 'cantidad','curp'
    ];
}
