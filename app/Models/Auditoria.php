<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;
     protected $table = "auditorias";
    protected $fillable = [
        'au_maquina', 'au_so', 'au_ip', 'au_navegador', 'au_fecha', 'au_us_id',
    ];
}
