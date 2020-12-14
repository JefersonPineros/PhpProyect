<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiscarritosController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\AlquilerController;
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

Route::get('usuarios', [UsuariosController::class, 'usuario'])->name('usuarios');

Route::get('taller', [TallerController::class, 'taller'])->name('taller');

Route::get('vehiculos', [VehiculosController::class, 'vehiculos'])->name('vehiculos');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('vehiculos/{id}',[VehiculosController::class, 'capturarItem'])->name('vehiculos.ac');
/**
 * Configuracion metodos post
 */
Route::post('vehiculos', [VehiculosController::class, 'crearVehiculo'])->name('vehiculos');

Route::post('alquiler', [AlquilerController::class, 'crearAlquiler'])->name('alquiler');
 * Metodos delete
 */
Route::post('vehiculos/{id}', [VehiculosController::class, 'delete_vehiculo'])->name('vehiculos.de');


//Captura de sesiones

Route::get('/prueba', function(){
//$user = User::find(2)->role;
//$user = User::find(1)->roles->descripcion;
//return $user;
$rol = Auth::user()->role->descripcion;
return $rol;
});

