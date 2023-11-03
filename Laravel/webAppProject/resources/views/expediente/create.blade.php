@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
    <div class="container">
        <h1>Crear Expediente</h1>
        <form method="POST" action="{{ route('expediente.store') }}">
            @csrf
            <div class="form-group">
                <label for="IDPropiedad">ID de Propiedad:</label>
                <select name="IDPropiedad" class="form-control">
                    <option value="">Seleccionar una propiedad</option> <!-- Agrega una opción por defecto -->
                    @foreach ($propiedades as $id => $direccion)
                        <option value="{{ $id }}">{{ $direccion }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control">
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" class="form-control">
            </div>
            <div class="form-group">
                <label for="resultado">Resultado:</label>
                <input type="text" class="form-control" id="resultado" name="resultado">
            </div>
            <div class="form-group">
            <label for="IDComprador">Id de Comprador:</label>
            <select name="IDComprador" class="form-control">
                @foreach ($compradores as $id => $nombre)
                    <option value="{{ $id }}">{{ $nombre }}</option>
                @endforeach
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Guardar Expediente</button>
        </form>
    </div>
@endsection
