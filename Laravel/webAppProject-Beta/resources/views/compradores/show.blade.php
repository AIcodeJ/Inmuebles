@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles del Comprador Potencial</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: {{ $comprador->nombre }}</h5>
                        <p class="card-text">Contacto: {{ $comprador->contacto }}</p>
                        <p class="card-text">Presupuesto: {{ $comprador->presupuesto }}</p>
                        <p class="card-text">Preferencias: {{ $comprador->preferencias }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <a href="{{ route('compradores.index') }}" class="btn btn-primary">Guardar</a>
    </div>
@endsection
