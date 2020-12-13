<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiscarritosController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;


Route::get('/', [MiscarritosController::class, 'index']);

Route::get('index', [MiscarritosController::class, 'index'])->name('index');

Route::get('servicios', [MiscarritosController::class, 'servicios'])->name('servicios');

Route::get('adicional', [MiscarritosController::class, 'adicional'])->name('adicional');

Route::get('nosotros', [MiscarritosController::class, 'nosotros'])->name('nosotros');


Route::get('reserva', [MiscarritosController::class, 'reserva'])->name('reserva');
Route::get('alquiler', [MiscarritosController::class, 'alquiler'])->name('alquiler');
Route::get('usuarios', [MiscarritosController::class, 'usuarios'])->name('usuarios');
Route::get('taller', [MiscarritosController::class, 'taller'])->name('taller');
Route::get('vehiculos', [MiscarritosController::class, 'vehiculos'])->name('vehiculos');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::get('/prueba', function(){
//$user = User::find(2)->role;
//$user = User::find(1)->roles->descripcion;
//return $user;
$rol = Auth::user()->role->descripcion;
return $rol;
});

