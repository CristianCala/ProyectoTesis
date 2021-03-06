<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $table = "modelos";
    protected $fillable = [
        'mdl_nombre', 'mdl_descripcion', 'marca_mar_id',
    ];
    public function equipos()
    {
        return $this->belongsTo(Equipo::class, 'modelos_mdl_id');
    }
    public function marcas()
    {
        return $this->hasMany(Marca::class, 'id');
    }
}
