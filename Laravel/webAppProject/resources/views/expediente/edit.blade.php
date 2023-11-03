@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
    <div class="container">
        <h2>Editar Expediente</h2>
        <form method="POST" action="{{ route('expedientes.update', $expediente->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $expediente->fecha }}">
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" class="form-control" value="{{ $expediente->estado }}">
            </div>

            <div class="form-group">
                <label for="resultado">Resultado:</label>
                <input type="text" name="resultado" id="resultado" class="form-control" value="{{ $expediente->resultado }}">
            </div>

            <div class="form-group">
                <label for="propiedad_id">Propiedad:</label>
                <select name="propiedad_id" id="propiedad_id" class="form-control">
                    @foreach ($propiedades as $id => $direccion)
                        <option value="{{ $id }}">{{ $direccion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="comprador_id">Comprador:</label>
                <select name="comprador_id" id="comprador_id" class="form-control">
                    @foreach ($compradores as $id => $nombre)
                        <option value="{{ $id }}">{{ $nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
