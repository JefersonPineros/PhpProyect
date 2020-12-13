<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosService extends Controller
{
    public function usuario(){
        return view('vistas/Usuarios');
    }
    /**
     * @funtion get_User contruye el objeto del usuario
     * @param $id recibe un numero
     */
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

    public static function get_AllUsers(){
        $query = 'SELECT * FROM users';
        $usuario = DB::select( $query , [1]);
        return $usuario;
    }

    public static function actualizar($usuario){
        try {
            User::updated([
                'name' => $usuario['name'],
                'tipo_Identificacion' => $usuario['tipo_Identificacion'],
                'numero_Identificacion' => $usuario['numero_Identificacion'],
                'email' => $usuario['email'],
                'direccion' =>$usuario['direccion'],
                'telefono' => $usuario['telefono']
            ]);
            return 'ok';
        } catch (\Throwable $th) {
            return 'Se ha presentado un error';
        }
    }
    public static function deleteUser($id){
        try {
            DB::delete('DELETE users WHERE id = ?', [$id]);
            return 'ok';
        } catch (\Throwable $th) {
            return 'No se pudo eliminar el usuario';
        }
    }
}
