<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiscarritosController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [MiscarritosController::class, 'index']);

Route::get('index', [MiscarritosController::class, 'index'])->name('index');

Route::get('servicios', [MiscarritosController::class, 'servicios'])->name('servicios');

Route::get('solicitar', [MiscarritosController::class, 'solicitar'])->name('solicitar');

Route::get('nosotros', [MiscarritosController::class, 'nosotros'])->name('nosotros');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

