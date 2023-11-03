@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
<div class="container">
    <h1>Propiedades Inmobiliarias</h1>
    <table class="table">
        <tbody>
            @foreach($propiedades as $propiedad)
            <tr>
                <td>{{ $propiedad->id }}</td>
                <td>{{ $propiedad->descripcion }}</td>
                <td>{{ $propiedad->valor_estimado }}</td>
                <td>{{ $propiedad->estado }}</td>
                <td>{{ $propiedad->distribucion_inmueble }}</td>
                <td>{{ $propiedad->metros_construccion }}</td>
                <td>{{ $propiedad->metros_superficie }}</td>
                <td>{{ $propiedad->municipio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('propiedades.create') }}" class="btn btn-primary">Crear un registro</a>
    <a href="{{ route('propiedades.edit', $propiedad->id) }}" class="btn btn-primary">Editar</a>
</div>
@endsection