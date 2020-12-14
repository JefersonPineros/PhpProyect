<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Generator\Method;

class VehiculosController extends Controller
{
    public $mostrar;
    public $idVehiculo;
    public $vehi;
    public function vehiculos(){
        $mostrar = false;
        $idVehiculo = 0;
        $vehi = new Vehiculos();
        return view('vistas/Vehiculos')
        ->with('mostrar', $mostrar)
        ->with('idVehiculo', $idVehiculo)
        ->with('vehi', $vehi);
    }

    public static function crearVehiculo(Request $request){
        DB::insert('INSERT into vehiculos (
            marca,
            modelo,
            placa,
            cantidad_pasajeros,
            color,
            numero_puertas,
            capacidad_carga,
            tipo_vehiculo_idtipo_vehiculo,
            alquiler_idalquiler,
            reserva_idreservas
            ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                $request->get('marca'),
                $request->get('modelo'),
                $request->get('placa'),
                $request->get('cantidad_pasajeros'),
                $request->get('color'),
                $request->get('numero_puertas'),
                $request->get('capacidad_carga'),
                1,
                null,
                null
                ]
            );
        return view('vistas/Vehiculos');
    }

    public static function get_AllVehiculos(){
        $query = 'SELECT * FROM vehiculos';
        $vehiculos = DB::select($query);
        return $vehiculos;
    }

    public static function get_vehiculo($id){
        $veh = new Vehiculos();
        $query = 'SELECT * FROM vehiculos WHERE idvehiculo = '. $id;
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
            $veh->reserva_idreserva = $item->reserva_idreservas;
        }
        return $veh;
    }
    public static function update_vehiculo(Request $vehiculo){
        $query = 'UPDATE vehiculos
            set marca = '.$vehiculo->get('marca').',
            modelo = '.$vehiculo->get('marca').',
            placa = '.$vehiculo->get('placa').',
            cantidad_pasajeros = '.$vehiculo->get('cantidad_pasajeros').',
            color = '.$vehiculo->get('color').',
            numero_puertas ='.$vehiculo->get('numero_puertas').',
            capacidad_carga ='.$vehiculo->get('capacidad_carga');
        DB::update($query.'where idvehiculo = ?', []);
        return view('vistas/Vehiculos');
    }
    public static function delete_vehiculo($id)
    {
        //$consultaVehiculo = VehiculosController::get_vehiculo($id->get('id'));
            DB::delete('DELETE FROM vehiculos WHERE idvehiculo = ?', [$id]);
    }

    public function capturarItem($id)
    {
        $vehi = $this->get_vehiculo($id);
        $idVehiculo = $id;
        $mostrar = true;

        return view('vistas/Vehiculos')
        ->with('mostrar', $mostrar)
        ->with('idVehiculo', $idVehiculo)
        ->with('vehi', $vehi);
    }
}
