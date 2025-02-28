@extends('layouts.plantilla')

@section('titulo')
Modulo Usuarios
@endsection

@section('contenido')
<div class="container">
    <div class="route">
        <div class="col-md-12 p-5">
            <h1>Usuarios</h1>
        </div>
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">

                <a href="{{Route('usuarios.create')}}" class="btn btn-primary">Nuevo</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Fecha</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
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
