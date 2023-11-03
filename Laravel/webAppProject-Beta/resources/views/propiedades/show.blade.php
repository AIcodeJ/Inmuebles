@extends('home')

@section('contenido')
    <div class="container">
        <h1>Detalles de la Propiedad</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>ID de Propiedad:</strong> {{ $propiedad->id }}</p>
                <p><strong>Descripción:</strong> {{ $propiedad->descripcion }}</p>
                <p><strong>Valor Estimado:</strong> ${{ $propiedad->valor_estimado }}</p>
                <p><strong>Estado:</strong> {{ $propiedad->estado }}</p>
                <p><strong>Distribución del Inmueble:</strong> {{ $propiedad->distribucion_inmueble }}</p>
                <p><strong>m^2 de Construcción:</strong> {{ $propiedad->metros_construccion }} m²</p>
                <p><strong>m^2 de Superficie:</strong> {{ $propiedad->metros_superficie }} m²</p>
                <p><strong>Municipio:</strong> {{ $propiedad->municipio }}</p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <a href="{{ route('propiedades.index') }}" class="btn btn-primary">Guardar</a>
    </div>
@endsection

