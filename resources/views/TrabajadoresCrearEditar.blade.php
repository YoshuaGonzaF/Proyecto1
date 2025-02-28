@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            @if($trabajador)
            <h1>Editar Trabajador</h1>
            @else
            <h1>Crear Nuevo Trabajador</h1>
            @endif
        </div>
        <div class="col-md-12">
@if($trabajador)
    <form action="{{route('trabajadores.update',$trabajador->id)}}" method="POST">
        @method('PUT')
        @else
        <form action="{{route('trabajadores.store')}}" method="POST">
        @endif
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{$trabajador ? $trabajador->nombre : ''}}" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" value="{{$trabajador ? $trabajador->telefono : ''}}" name="telefono" required>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="">Seleccione género</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sueldo" class="form-label">Sueldo</label>
            <input type="number" step="0.01" class="form-control" id="sueldo" value="{{$trabajador ? $trabajador->sueldo : ''}}" name="sueldo" required>
        </div>

        <div class="mb-3">
            <label for="puesto" class="form-label">Puesto</label>
            <input type="text" class="form-control" id="puesto" value="{{$trabajador ? $trabajador->puesto : ''}}" name="puesto" required>
        </div>

        <div class="mb-3">
            <label for="numero_seguro" class="form-label">Número de Seguro</label>
            <input type="text" class="form-control" id="numero_seguro" value="{{$trabajador ? $trabajador->numero_seguro : ''}}" name="numero_seguro" required>
        </div>

        <div class="mb-3">
            <label for="correo_electronico" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo_electronico" value="{{$trabajador ? $trabajador->correo_electronico : ''}}" name="correo_electronico" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('trabajadores.index')}}" class="btn btn-secondary">Cancelar</a>
      




    </form>

    </div>
</div>



@endsection
