<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculosController extends Controller
{
    public function vehiculos(){
        return view('vistas/Vehiculos');
    }

    public static function crearVehiculo($vehiculo){
        return Vehiculos::create(
            [
                'idvehiculo' => $vehiculo['idvehiculo'],
                'marca' => $vehiculo['marca'],
                'modelo' => $vehiculo['modelo'],
                'placa' => $vehiculo['placa'],
                'cantidad_pasajeros' => $vehiculo['cantidad_pasajerons'],
                'color' => $vehiculo['color'],
                'numero_puertas' => $vehiculo['numero_puertas'],
                'capacidad_carga' => $vehiculo['capacidad_carga'],
                'tipo_vehiculo_idtipo_vehiculo' => $vehiculo['tipo_vehiculo_idtipo_vehiculo'],
                'alquiler_idalquiler' => $vehiculo['alquiler_idalquiler'],
                'reservas_idreservas' => $vehiculo['reservas_idreservas']
            ]
        );
    }

    public static function get_AllVehiculos(){
        $query = 'SELECT * FROM vehiculos';
        $vehiculos = DB::select($query);
        return $vehiculos;
    }

    public static function get_vehiculo($id){
        $veh = new Vehiculos();
        $query = 'SELECT * FROM vehiculos'. $id;
        $vehiculo = DB::select($query);
        foreach($vehiculo as $item){
            $veh->idvehiculo = $item->idvehiculo;
            $veh->marca = $item->marca;
            $veh->modelo = $item->modelo;
            $veh->placa = $item->placa;
            $veh->cantidad_pasajeros = $item->cantidad_pasajeros;
            $veh->color = $item->color;
            $veh->numero_puertas = $item->numero_puertas;
            $veh->capacidad_carga = $item->capacidad_carga;
            $veh->tipo_vehiculo_idtipo_vehiculo = $item->tipo_vehiculo_idtipo_vehiculo;
            $veh->alquiler_idalquiler = $item->alquiler_idalquiler;
            $veh->reservas_idreserva = $item->reservas_idreserva;
        }
        return $veh;
    }
    public static function update_vehiculo($vehiculo){
        return Vehiculos::updated(
            [
                'idvehiculo' => $vehiculo['idvehiculo'],
                'marca' => $vehiculo['marca'],
                'modelo' => $vehiculo['modelo'],
                'placa' => $vehiculo['placa'],
                'cantidad_pasajeros' => $vehiculo['cantidad_pasajerons'],
                'color' => $vehiculo['color'],
                'numero_puertas' => $vehiculo['numero_puertas'],
                'capacidad_carga' => $vehiculo['capacidad_carga'],
                'tipo_vehiculo_idtipo_vehiculo' => $vehiculo['tipo_vehiculo_idtipo_vehiculo'],
                'alquiler_idalquiler' => $vehiculo['alquiler_idalquiler'],
                'reservas_idreservas' => $vehiculo['reservas_idreservas']
            ]
        );
    }
    public static function delete_vehiculo($id)
    {
        try {
            DB::delete('DELETE vehiculos WHERE idvehiculo = ?', [$id]);
            return 'ok';
        } catch (\Throwable $th) {
            return 'Se ha presentado un error';
        }

    }
}
