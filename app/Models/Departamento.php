<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = "departamentos";
    protected $primaryKey = 'dep_id';
    protected $fillable = [
        'dep_id', 
        'dep_nombre', 
        'dep_descripcion', 
    ];


    public function equipos()
    {
        return $this->hasMany(Equipo::class, 'departamentos_dep_id');
    }
}
