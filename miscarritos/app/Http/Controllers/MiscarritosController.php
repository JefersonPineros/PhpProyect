<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscarritosController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function servicios(){
        return view('vistas/Servicios');
    }
    public function adicional(){
        return view('vistas/InfoAdicional');
    }
    public function nosotros(){
        return view('vistas/Nosotros');
    }
    public function usuarios(){
        return view('vistas/Usuarios');
    }
    public function taller(){
        return view('vistas/Taller');
    }
    public function vehiculos(){
        return view('vistas/Vehiculos');
    }
    public function reserva(){
        return view('vistas/Reserva');
    }
    public function alquiler(){
        return view('vistas/Alquiler');
    }
}
