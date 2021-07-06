<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table = "marcas";
    protected $fillable = [
        'mar_nombre', 'mar_descripcion',
    ];
   
    public function equipos()
    {
        return $this->hasMany(Equipo::class, 'marcas_mar_id');
    }

    public function modelos()
    {
        return $this->belongsTo(Equipo::class, 'mdl_id');
    }


}
