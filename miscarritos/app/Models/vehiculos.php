<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idvehiculo',
        'marca',
        'modelo',
        'placa',
        'cantidad_pasajeros',
        'color',
        'numero_puertas',
        'capacidad_carga',
        'tipo_vehiculo_idtipo_vehiculo',
        'alquiler_idalquiler',
        'reserva_idreservas'
    ];
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idvehiculo';
}
