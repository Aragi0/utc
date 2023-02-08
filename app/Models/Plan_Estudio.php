<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan_Estudio extends Model
{
    use HasFactory;

    protected $table='plan_estudio';

    protected $primaryKey='id';

    protected $whit=['asignaturas'];

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'id',
        'id_asignatura',
        'nombre_plan',
        'anio',
        'cuatrimestres',
        'horas'
    ];

    public function asignatura(){
        return $this->belongsTo(Asignaturas::class, 'id_asignatura');
    }
}
