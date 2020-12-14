<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public $idreservas;

     public function reservas(){
        return view('vistas/Reserva');
    }
    

public static function get_AllReservas(){
        $query = 'SELECT * FROM reservas';
        $reservas = DB::select($query);
        return $reservas;
    }


}
