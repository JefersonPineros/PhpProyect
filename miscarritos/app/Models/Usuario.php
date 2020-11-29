<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{

use  Notifiable;

   protected $table = 'usuarios';
   protected $primaryKey = 'id';

   protected $fillable = [
    'name',
    'tipo_Identificacion',
    'numero_Identificacion',
    'email',
    'direccion',
    'telefono',
    'password',
   
   ];


}
