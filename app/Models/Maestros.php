<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestros extends Model
{
    use HasFactory;
    protected $table='maestros';

    protected $primaryKey='id';

    protected $with=['grado_prof'];

    protected $fillable=[
        'id',
        'codigo',
        'sexo',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'curp',
        'num_seguro',
        'rfc',
        'id_grado'
    ];

    public function grado_prof(){
        return $this->belongsTo(Grado_Maestro::class, 'id_grado');
    }
}
