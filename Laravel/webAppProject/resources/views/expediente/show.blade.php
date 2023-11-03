@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
<div class="container">
    <h1>Detalles del Expediente</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Expediente #{{ $expediente->id }}</h5>
            <p class="card-text"><strong>Propiedad ID:</strong> {{ $expediente->IDPropiedad }}</p>
            <p class="card-text"><strong>Fecha:</strong> {{ $expediente->fecha }}</p>
            <p class="card-text"><strong>Estado:</strong> {{ $expediente->estado }}</p>
            <p class="card-text"><strong>Resultado:</strong> {{ $expediente->resultado }}</p>
            <p class="card-text"><strong>Comprador ID:</strong> {{ $expediente->IDComprador }}</p>
            <a href="{{ route('expedientes.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</div>
@endsection