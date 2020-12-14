@extends('layout.dashboard')
@php
use App\Http\Controllers\AlquilerController;
use App\Models\alquilers;
use App\Http\Controllers\UsuariosController;
use App\Models\User;

$User = UsuariosController::get_AllUsers();
$Alquiler = AlquilerController::get_AllAlquiler();

@endphp
@section('content')
  <div class="row">
        <div class="col-12" style="padding: 20px ">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <th>Id Alquiler</th>
                    <th>Estado</th>
                    <th>Costo</th>
                    <th>Usuario Solicitante</th>
                    <th>Fecha inicial</th>
                    <th>Fecha Final</th>
                </thead>
                <tbody>
                    @foreach ($Alquiler as $item1)
                        <tr>
                            <td>{{ $item1->idalquiler }}</td>
                            <td>{{ $item1->estado_alquiler }}</td>
                            <td>{{ $item1->costo }}</td>
                            <td>@php
                              $user = User::find( $item1->usuario_idUsuario )->name;                          
                              @endphp
                              {{$user}}
                            </td>
                            <td>{{ $item1->fecha_inicial}}</td>
                            <td>{{ $item1->fecha_final}}</td>
                           
                            <td>
                                <button class="btn btn-danger" >X</button>
                                <button class="btn btn-info">A</button>
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
                        <h1>Alquiler de Vehiculos</h1>
                    </div>
                    <form method="POST" action="{{ route('alquiler') }}">
                        <div class="row">
                            @csrf 
                               <div class="form-group col-12">
                                <label for="example-date-input" class="form-control-label">Usuario</label>                             
                                    <select name="usuario_idUsuario" class="form-control" id="exampleFormControlSelect1">
                                        <option value="" selected="selected">Elije un usuario </option>
                                     @foreach ($User as $item)
                                       <option value="{{ $item->id}}">{{ $item->name}} N° identificacion :{{ $item->numero_Identificacion}}</option>
                                     @endforeach
                                      </select>
                            </div>

                            <div class="form-group col-6">
                                <label for="example-text-input" class="form-control-label">Fecha Inicial</label>
                                <input name="fecha_inicial" class="form-control " type="date" placeholder="Fecha inicial del  Alquiler"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-email-input" class="form-control-label">Fecha Final</label>
                                <input name="fecha_final" class="form-control " type="date" placeholder="Fecha Final del Alquiler"
                                    id="example-email-input">
                            </div>
                            <div class="form-group col-12">
                                <label for="example-text-input" class="form-control-label">Costo</label>
                                <input name="costo" class="form-control " type="number" placeholder=" $ : Costo del alquiler"
                                    id="example-text-input">
                            </div>
                         

                            <div class="form-group col-7">
                                <label for="exampleFormControlSelect1" class="form-control-label">Estado Del Alquiler</label>
                                <select name="estado_alquiler" class="form-control" id="exampleFormControlSelect1">
                                    <option value="" selected="selected">Elije una Opción </option>
                                    <option value="Solicitado">Solicitado</option>
                                    <option value="En Validacion">En Validacion</option>
                                    <option value="En Alquiler">En Alquiler</option>
                                    <option value="Aprobado">En Alquiler</option>
                                    <option value="Cancelado">Cancelado</option>
                                </select>
                            </div>
                            <div class="text-center ml-5">
                                <button type="submit" class="btn btn-primary mt-4">Guardar Alquiler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
@endsection

