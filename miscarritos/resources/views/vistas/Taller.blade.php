@extends('layout.dashboard')
@php

use App\Http\Controllers\UsuariosController;
use App\Models\User;
use App\Models\Tallers;
use App\Http\Controllers\VehiculosController;
use App\Models\Vehiculos;

$User = UsuariosController::get_AllUsers();
$vehiculos = VehiculosController::get_AllVehiculos();
$revision = new Tallers;

@endphp

@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card bg-secondary border-0">
        <div class="card-body px-lg-5 py-lg-5">
          <div class="text-center text-muted mb-4">
            <h1>Reporte de Revisión</h1>
          </div>
          <form method="POST" action="{{ route('taller') }}">
            <div class="row">
              @csrf
                <div class="form-group col-12">
                  <label for="example-text-input" class="form-control-label">Fecha de Revisión</label>
                  <input name="fecha_revision" class="form-control " type="date"
                  placeholder="Selecione la fecha" id="example-date-input">
                </div>
                <div class="form-group col-12">
                  <label for="exampleFormControlTextarea1" class="form-control-label">Descripción de la Revisión</label>
                  <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group col-12">
                  <label for="exampleFormControlSelect1" class="form-control-label">Estado Actual en que se recibe el Vehículo</label>
                  <select name='estado_vehiculo' class="form-control" id="exampleFormControlSelect1">
                    <option value='Excelente'>Excelente</option>
                    <option value='Bueno'>Bueno</option>
                    <option value='Regular'>Regular</option>
                    <option value='Malo'>Malo</option>
                    <option value='Deficiente'>Deficiente</option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="example-date-input" class="form-control-label">Nombre del Mecánico que ejecuta la revisión </label>
                  <select name="usuario_idUsuario" class="form-control" id="exampleFormControlSelect1">
                      <option value="" selected="selected"> Seleccione su nombre</option>
                      @foreach ($User as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group col-12">
                  <label for="example-date-input" class="form-control-label">Datos del Vehículo</label>
                    <select name="vehiculo_idvehiculo" class="form-control" id="exampleFormControlSelect1">
                      <option value="" selected="selected"> Seleccione la Placa del Vehículo</option>
                      @foreach ($vehiculos as $item)
                        <option value="{{ $item->idvehiculo }}">{{ $item->placa }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="text-center" style="width: 330%; display: flex; align-items: center; justify-content: center;">
                  <button type="submit"  class="btn btn-primary mt-4">Generar</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
