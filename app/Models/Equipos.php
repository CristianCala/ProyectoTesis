<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;
    protected $fillable = ['eq_modelo', 'eq_marca', 'precio', 'status'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
