<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    protected $table = "servicios";
    protected $primaryKey = "id";
    protected $fillable = ['id',
          'codigo_serv',
          'nombre_serv',
          'precio_serv',
          'created_at',
];
}
