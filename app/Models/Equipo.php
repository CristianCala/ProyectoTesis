<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = "equipos";
    protected $fillable = [
         'modelos_mdl_id', 
         'marcas_mar_id', 
         'eq_serial', 
         'eq_tequid', 
         'eq_nbiennacional' ,
         'eq_estatus', 
         'departamentos_dep_id',
     ];
     public function tipo_equipos()
     {
         return $this->belongsTo(TipoEquipo::class,'eq_tequid', 'teq_id');
     }
 
     public function departamentos()
     {
         return $this->belongsTo(Departamento::class, 'departamentos_dep_id', 'dep_id');
     }
 
     public function modelos()
     {
         return $this->belongsTo(Modelo::class, 'modelos_mdl_id', 'id');
     }
     public function marcas()
     {
         return $this->belongsTo(Marca::class, 'marcas_mar_id', 'id');
     }
     public function prestamo_equipos()
     {
         return $this->hasMany(PrestamoEquipo::class, 'equipos_eq_id');
     }
}
