
@extends('layouts.plantilla')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Automóviles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{Route('automoviles.create')}}" class="btn btn-primary">Agregar Automóvil</a>
            <div class="bg-light rounded h-100 p-4">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Año</th>
                                <th scope="col">Color</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($automoviles as $automovil)
                            <tr>
                                <td>{{$automovil->id}}</td>
                                <td>{{$automovil->marca}}</td>
                                <td>{{$automovil->modelo}}</td>
                                <td>{{$automovil->anio}}</td>
                                <td>{{$automovil->color}}</td>
                                <td>${{number_format($automovil->precio,2)}}</td>
                                <td>
                                    <a href="{{Route('automoviles.edit', $automovil->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form id="deleteForm" action="{{Route('automoviles.destroy', $automovil->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDeletion()">Eliminar</button>
                                    </form>

                                    <script>
                                    function confirmDeletion() {
                                        return confirm('¿Estás seguro de que deseas eliminar este automóvil? Esta acción no se puede deshacer.');
                                    }
                                    </script>

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
