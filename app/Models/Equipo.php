<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";
   protected $fillable = [
        'eq_modelo', 'eq_marca', 'eq_serial', 'eq_tequid', 'eq_nbiennacional' ,'eq_estatus', 'departamentos_dep_id',
    ];
         public function tipo_equipos()
    {
        return $this->belongsToMany(TipoEquipo::class, 'eq_tequid');
    }

        public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'departamentos_dep_id');
    }

       /*     public function ubicacion_equipos()
    {
        return $this->belongsTo(UbicacionEquipo::class, 'ubicacion_equipo_ubeq');
    }*/
}
