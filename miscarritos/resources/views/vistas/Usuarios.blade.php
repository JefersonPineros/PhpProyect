@extends('layout.dashboard')
@php
use App\Http\Controllers\UsuariosController;
use App\Models\User;

$usuarios = UsuariosController::get_AllUsers();
@endphp
@section('content')
    <div class="row">
        
            
        
        <div class="col-12">
            <h1 style="text-align: center">Lista Usuarios</h1>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <th>Id Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Tipo de identificación</th>
                    <th>Número de identificación</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Rol de Usuario</th>
                </thead>
                <tbody>
                    @foreach ($usuarios as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->tipo_Identificacion}}</td>
                        <td>{{$item->numero_Identificacion}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->direccion}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->role_id}}</td>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <div class="card bg-secondary border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <h1>Crear Usuario</h1>
                    </div>
                    <form method="POST" action="{{route('usuario')}}">
                        <div class="row">
                            @csrf
                            <div class="form-group col-12">
                                <label for="example-text-input" class="form-control-label">Nombre Completo</label>
                                <input name="name" class="form-control " type="text" placeholder="Escribe nombre completo"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleFormControlSelect1" class="form-control-label">Tipo de Identificación</label>
                                <select  name="tipo_Identificacion" class="form-control" id="exampleFormControlSelect1">
                                    <option value='cc'>Cédula de ciudadania</option>
                                    <option value='NIT'>NIT</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="example-email-input" class="form-control-label">Número de identificación</label>
                                <input name="numero_Identificacion" class="form-control " type="text" placeholder="Escribe número de identificación"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-12">
                                <label for="example-text-input" class="form-control-label">Correo Electrónico</label>
                                <input name="email" class="form-control " type="text" placeholder="nombre@example.com"
                                    id="example-email-input">
                            </div>
                            <div class="form-group col-12">
                                <label for="example-text-input" class="form-control-label">Dirección</label>
                                <input name="direccion" class="form-control " type="text" placeholder="Escribe dirección"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-text-input" class="form-control-label">Teléfono</label>
                                <input name="telefono" class="form-control " type="text" placeholder="Escribe Teléfono"
                                    id="example-text-input">
                            </div>
                            <div class="form-group col-6">
                                <label for="example-email-input" class="form-control-label">Password</label>
                                <input name="password" class="form-control " type="password" placeholder="Ingresa Contraseña"
                                    id="example-email-input">
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleFormControlSelect1" class="form-control-label">Rol de Usuario</label>
                                <select  name="role_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value='1'>Administrador</option>
                                    <option value='2'>Almanecista</option>
                                    <option value='3'>Mecánico</option>
                                    <option value='4'>Cliente</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Crear Usuario</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection
