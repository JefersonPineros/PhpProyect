<?php

namespace App\Http\Controllers;

use App\Models\tallers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TallerController extends Controller
{
    public function taller()
    {
        return view('vistas/Taller');
    }

    public static function crearReporteRevision(Request $request){
        DB::insert('INSERT into tallers (
            fecha_revision,
            descripcion,
            estado_vehiculo,
            usuario_idUsuario,
            vehiculo_idvehiculo
            ) values (?, ?, ?, ?, ?)', [
                $request->get('fecha_revision'),
                $request->get('descripcion'),
                $request->get('estado_vehiculo'),
                $request->get('usuario_idUsuario'),
                $request->get('vehiculo_idvehiculo')
                ]
            );
        return view('vistas/Taller');
    }
}
