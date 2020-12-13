<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alquilers extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idalquiler',
        'costo',
        'estado_alquiler',
        'usuario_idUsuario',
        'fecha_inicial',
        'fecha_final'
    ];
}
