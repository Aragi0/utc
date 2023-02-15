<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asignaturas;


class Plan_Estudio extends Model
{
    use HasFactory;
    
    public $timestamps=false;
    protected $table = "plan_estudio";
    protected $primaryKey = "id";
    protected $fillable=[
        'id',
        'id_asignatura',
        'nombre_plan',
        'anio',
        'cuatrimestres',
        'horas'
    ];

    // public function asginatura(){
    //     return $this->belongsTo(Asignaturas::class, 'id_plan');
    // }
}
