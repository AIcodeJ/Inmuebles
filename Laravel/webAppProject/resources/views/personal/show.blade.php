@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
    <div class="container">
        <h1>Detalles del Personal</h1>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <p><strong>ID:</strong> {{ $personal->id }}</p>
                <p><strong>Usuario:</strong> {{ $personal->usuario }}</p>
                <p><strong>Contraseña:</strong> {{ $persona->contraseña }}</p>
                <p><strong>Rol:</strong> {{ $personal->rol }}</p>
            </div>
        </div>

        <a href="{{ route('personal.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
