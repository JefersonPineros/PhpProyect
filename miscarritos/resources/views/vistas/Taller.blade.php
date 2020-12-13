@extends('layout.dashboard')
@php
    use App\Models\Tallers;
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
          <form onsubmit="">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Placa del Vehículo</label>
                <input class="form-control" type="text" value="Placa" id="example-text-input">
            </div>
            <div class="form-group">
                <label for="example-date-input" class="form-control-label">Fecha de Revisión</label>
                <input class="form-control" type="date" value="2018-11-23" id="example-date-input">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="form-control-label">Estado Actual del Vehículo</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option value=''>Excelente</option>
                    <option value=''>Bueno</option>
                    <option value=''>Regular</option>
                    <option value=''>Malo</option>
                    <option value=''>Deficiente</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-control-label">Descripción de la Revisión</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
              </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Generar</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
