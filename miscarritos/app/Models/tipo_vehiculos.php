<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_vehiculos extends Model
{
    use HasFactory;
    protected $fillable = [
        'idtipo_vehiculo',
        'descripcion'
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idtipo_vehiculo';
}
