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
    public function nosotros() {
        return view('vistas/Nosotros');
    }
}
