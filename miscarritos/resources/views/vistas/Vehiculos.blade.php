@extends('layout.dashboard')
@php
use App\Http\Controllers\VehiculosController;
use App\Models\Vehiculos;
$vehiculos = VehiculosController::get_AllVehiculos();

@endphp
@section('content')
    <div class="row">
        <div class="col-12" style="padding: 20px ">
            <h1 style="text-align: center">Lista Vehiculos</h1>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <th>Id vehiculo</th>
                    <th>Marca</th>
                    <th>Model</th>
                    <th>placa</th>
                    <th>Pasajeros</th>
                    <th>color</th>
                    <th>Puertas</th>
                    <th>capacidad</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $item)
                        <tr>
                            <td>{{ $item->idvehiculo }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->modelo }}</td>
                            <td>{{ $item->placa }}</td>
                            <td>{{ $item->cantidad_pasajeros }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->numero_puertas }}</td>
                            <td>{{ $item->capacidad_carga }}</td>
                            <td>
                                <form method="POST" action="{{ route('vehiculos.de',  $item->idvehiculo)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger" >X</button>
                                </form>
                                <form method="GET" action="{{ route('vehiculos.ac',  $item->idvehiculo)}}">
                                    @csrf
                                    <button type="submit" class="btn btn-info click" >A</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card bg-secondary border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <h1>Crear vehiculo</h1>
                    </div>
                    <form method="POST" action="{{ route('vehiculos')}}">
                        <div class="row">
                            @csrf
                            <div class="form-group col-12">
                                <label for="example-text-input" class="form-control-label">Marca</label>
                                <input name="marca" class="form-control " type="text" placeholder="Marca del vehiculo"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-text-input" class="form-control-label">Modelo</label>
                                <input name="modelo" class="form-control " type="text" placeholder="Modelo del vehiculo"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-email-input" class="form-control-label">Placa</label>
                                <input name="placa" class="form-control " type="text" placeholder="Placa del vehiculo"
                                    id="example-email-input">
                            </div>
                            <div class="form-group col-3">
                                <label for="example-date-input" class="form-control-label">Pasajeros</label>
                                <input name="cantidad_pasajeros" class="form-control " type="number"
                                    placeholder="Cantidad Max pasajeros" id="example-date-input">
                            </div>
                            <div class="form-group col-3">
                                <label for="example-date-input" class="form-control-label">Puertas</label>
                                <input name="numero_puertas" class="form-control " type="number" placeholder="Cant puertas"
                                    id="example-date-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-date-input" class="form-control-label">Color</label>
                                <input name="color" class="form-control " type="text" placeholder="Color del vehiculo"
                                    id="example-date-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-date-input" class="form-control-label">Capacidad de carga</label>
                                <input name="capacidad_carga" class="form-control " type="text"
                                    placeholder="Color del vehiculo" id="example-date-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1" class="form-control-label">Tipo vehiculo</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="" selected="selected">Elije una Opción </option>
                                    <option>Bajo costo</option>
                                    <option>Vehículo familiar</option>
                                    <option>Sedanes</option>
                                    <option>Vehículo de lujo</option>
                                    <option>Deportivo</option>
                                    <option>Todoterreno</option>
                                    <option>Comerciales</option>
                                </select>
                            </div>
                            <div class="text-center" style="width: 330%; display: flex; align-items: center; justify-content: center;">
                                <button type="submit" class="btn btn-primary mt-4">Crear vehiculo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            @if ($mostrar)
                {{ $idVehiculo }}
                {{ $vehi }}
            @endif
        </div>
    </div>
@endsection
@section('scrips')


@endsection
