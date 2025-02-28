@extends('layouts.plantilla')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Trabajadores</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{Route('trabajadores.create')}}" class="btn btn-primary">Agregar Trabajador</a>
            <div class="bg-light rounded h-100 p-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Género</th>
                                <th scope="col">Sueldo</th>
                                <th scope="col">Puesto</th>
                                <th scope="col">Número Seguro</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trabajadores as $trabajador)
                            <tr>
                                <td>{{$trabajador->id}}</td>
                                <td>{{$trabajador->nombre}}</td>
                                <td>{{$trabajador->telefono}}</td>
                                <td>{{$trabajador->genero}}</td>
                                <td>${{number_format($trabajador->sueldo,2)}}</td>
                                <td>{{$trabajador->puesto}}</td>
                                <td>{{$trabajador->numero_seguro}}</td>
                                <td>{{$trabajador->correo_electronico}}</td>
                                <td>
                                    <a href="{{Route('trabajadores.edit', $trabajador->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{Route('trabajadores.destroy', $trabajador->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection
