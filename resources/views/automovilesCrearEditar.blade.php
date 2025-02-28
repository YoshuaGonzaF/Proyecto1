@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            @if(isset($automovil))
                <h1>Editar Automóvil</h1>
            @else
                <h1>Crear Nuevo Automóvil</h1>
            @endif
        </div>
        <div class="col-md-12">
            @if(isset($automovil))
                <form action="{{ route('automoviles.update', $automovil->id) }}" method="POST">
                @method('PUT')
            @else
                <form action="{{ route('automoviles.store') }}" method="POST">
            @endif
            @csrf

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca"
                       value="{{ isset($automovil) ? $automovil->marca : '' }}"
                       name="marca" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo"
                       value="{{ isset($automovil) ? $automovil->modelo : '' }}"
                       name="modelo" required>
            </div>

            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control" id="anio"
                       value="{{ isset($automovil) ? $automovil->anio : '' }}"
                       name="anio" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color"
                       value="{{ isset($automovil) ? $automovil->color : '' }}"
                       name="color" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio"
                       value="{{ isset($automovil) ? $automovil->precio : '' }}"
                       name="precio" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('automoviles.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
