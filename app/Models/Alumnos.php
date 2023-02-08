<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table='alumnos';

    protected $primaryKey='id';

    protected $fillable=[
        'id',
        'curp',
        'num_seguro',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'sexo',
        'telefono',
        'correo',
        'direccion',
        'localidad',
        'municipio'
    ];
}
