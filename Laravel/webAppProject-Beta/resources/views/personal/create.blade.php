@extends('home')

@section('contenido')
    <div class="container">
        <h1>Crear Personal</h1>
        <form method="POST" action="{{ route('personal.store') }}">
            @csrf
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" class="form-control">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <input type="text" name="rol" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
