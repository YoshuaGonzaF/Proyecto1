@extends('layouts.plantilla')
@section('titulo')
Nuevo Usuario
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <h3>Registro de ususario</h3>
        </div>
        <div class="col-md-6 offset-3">
            <div class="bg-light rounded h-100 p-4">
                <form action="{{Route('usuarios.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <a href="{{Route('usuarios')}}" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
