@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
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
