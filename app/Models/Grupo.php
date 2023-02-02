<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matriculas;
use App\Models\Asignaturas;
use App\Models\Maestros;
use App\Models\Carreras;

class Grupo extends Model
{
    use HasFactory;

    protected $table='grupos';

    protected $primaryKey='id';

    protected $whit=['matriculas','asignaturas','maestros','carreras'];

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'id',
        'id_matricula',
        'id_asignatura',
        'id_profesor',
        'carrera_id'
    ];

    public function matriculas(){
        return $this->belongsTo(Matriculas::class, 'id_matricula');
    }

    public function asigatura(){
        return $this->belongsTo(Asignaturas::class, 'id_asignaturas');
    }

    public function maestros(){
        return $this->belongsTo(Maestros::class, 'id_matricula');
    }

    public function carrera(){
        return $this->belongsTo(Carreras::class, 'id_matricula');
    }
}
