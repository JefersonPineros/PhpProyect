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
    public function solicitar(){
        return view('vistas/threecolumn');
    }
    public function nosotros() {
        return view('vistas/Nosotros');
    }
}
