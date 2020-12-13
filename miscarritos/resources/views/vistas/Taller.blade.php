@extends('layout.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-5 col-md-8">
      <div class="card bg-secondary border-0">
        <div class="card-body px-lg-6 py-lg-6">
          <div class="text-center text-muted mb-4">
            <h1>Reporte de Revisión</h1>
        </div>
        <form>
            
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
                    <option>Excelente</option>
                    <option>Bueno</option>
                    <option>Regular</option>
                    <option>Malo</option>
                    <option>Deficiente</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-control-label">Descripción de la Revisión</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
              </div> 
            <div class="text-center">
                <button type="button" class="btn btn-primary mt-4">Generar</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>

@endsection