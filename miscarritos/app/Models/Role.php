<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'descripcion'];
   /* use HasFactory;
    protected $fillable = [
        'descripcion',

           ];


    public function users()
    {
        return $this->hasMany('App\Models\User','roles_idroles');
    }*/
}
