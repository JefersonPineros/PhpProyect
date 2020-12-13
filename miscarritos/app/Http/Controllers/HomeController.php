<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function get_User($id) {
        $user = new User();
        $query = 'SELECT * FROM users WHERE users.id = '. $id ;
        $usuario = DB::select( $query);
        foreach($usuario as $item){
            $user->id = $item->id;
            $user->name  = $item->name;
            $user->tipo_Identificacion = $item->tipo_Identificacion;
            $user->numero_Identificacion = $item->numero_Identificacion;
            $user->email = $item->email;
            $user->direccion = $item->direccion;
            $user->telefono = $item->telefono;
            $user->password = $item->password;
            $user->rol_id = $item->role_id;
        }

        return $user;
    }
}
