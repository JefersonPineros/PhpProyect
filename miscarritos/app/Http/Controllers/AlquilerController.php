<?php

namespace App\Http\Controllers;

use App\Models\alquilers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquilerController extends Controller
{
    public $idalquiler;

     public function alquiler(){
        return view('vistas/Alquiler');
    }
    public static function crearAlquiler(Request $request){
        DB::insert('INSERT into alquilers (
            costo,
            estado_alquiler,
            usuario_idUsuario,
            fecha_inicial,
            fecha_final            
            ) values (?, ?, ?, ?, ?)', [
            	
                $request->get('costo'),
                $request->get('estado_alquiler'),
                $request->get('usuario_idUsuario'),
                $request->get('fecha_inicial'),
                $request->get('fecha_final')
                ]
            );
        return view('vistas/Alquiler');
    }

public static function get_AllAlquiler(){
        $query = 'SELECT * FROM alquilers';
        $alquilers = DB::select($query);
        return $alquilers;
    }


}
