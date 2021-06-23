<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    use HasFactory;
    protected $table = "tipo_equipos";
    protected $primaryKey = 'teq_id';
        protected $fillable = [
        'teq_nombre', 'teq_descripcion'
    ];
    public function equipos()
    {
        return $this->hasMany(Equipo::class, 'eq_tequid');
    }
  
}
