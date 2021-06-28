<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoMovimiento extends Model
{
    use HasFactory;
    public function equipos()
    {
        return $this->hasMany(Equipo::class, 'equipos_eq_id');
    }
}
