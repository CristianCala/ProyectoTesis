<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
         public function modelos()
    {
        return $this->hasMany(Modelo::class, 'modelo_id');
    }
    public function equipos()
    {
        return $this->belongsTo(Equipo::class, 'eq_marca');
    }
}
