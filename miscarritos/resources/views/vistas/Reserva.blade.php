@extends('layout.dashboard')

@php
use App\Http\Controllers\ReservaController;
use App\Models\reservas;
use App\Http\Controllers\UsuariosController;
use App\Models\User;

$User = UsuariosController::get_AllUsers();
$Reservas = ReservaController::get_AllReservas();

@endphp
@section('content')
  <div class="row">
        <div class="col-12" style="padding: 20px ">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <th>Id Reserva</th>
                    <th>Estado Reserva</th>
                    <th>Usuario que Solicita Reserva</th>
                    <th>Fecha Reserva</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($Reservas as $item)
                        <tr>
                            <td>{{ $item->idreservas }}</td>
                            <td>{{ $item->estado_reserva }}</td>
                            <td>@php
                              $user = User::find( $item->usuario_idUsuario )->name;                          
                              @endphp
                              {{$user}}
                            </td>
                            <td>{{ $item->fecha_reserva}}</td>
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

@endsection

