<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan_Estudio;

class Carreras extends Model
{
    use HasFactory;

    protected $table='carreras';

    protected $primaryKey='id';

    protected $whit=['plan_estudio'];

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'id',
        'codigo',
        'nombre_carrera',
        'id_plan'
    ];

    public function plan(){
        return $this->belongsTo(Plan_Estudio::class, 'id_plan');
    }
}
