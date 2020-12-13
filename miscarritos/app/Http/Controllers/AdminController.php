<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function servicios(){
        return view('vistas/Servicios');
    }
    public static function holaMundo(){
        $hola = 'Hola muundo';
        return $hola;
    }
}
