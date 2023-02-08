<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_pagos extends Model
{
    use HasFactory;
    protected $table = "registro_pagos";
    protected $primaryKey = "id";
    protected $with=['matriculas','servicios'];
    protected $fillable = [
        'id',
        'id_servicio',
        'id_matricula',
        'estado',
    ];
    public function servicios(){
        return $this->belongsTo(Servicios::class, 'id_servicio');
    }
    public function matriculas(){
        return $this->belongsTo(Matriculas::class, 'id_matricula');
    }
}
