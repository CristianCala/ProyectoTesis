<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = ['eq_modelo, eq_marca, precio, status'];

    public function user()
    {
        return $this->belongsTo(\App\Models\Equipo::class);
    }
    //validacion de equipos activos
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
