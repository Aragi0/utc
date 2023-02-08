<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan_Estudio extends Model
{
    use HasFactory;

    protected $table='plan_estudio';

    protected $primaryKey='id';

    protected $whit=[''];

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'id',
        'codigo',
        'nombre_carrera',
        'id_plan'
    ];
}
