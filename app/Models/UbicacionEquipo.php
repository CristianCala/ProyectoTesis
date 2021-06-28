<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbicacionEquipo extends Model
{
    use HasFactory;
    protected $table = "ubicacion_equipos";
    protected $fillable = [
        'ubeq_nombre', 'ubeq_descripcion'
    ];
}
