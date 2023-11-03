@extends('home')

@section('contenido')
<div class="container">
    <h1>Expedientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Propiedad</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Resultado</th>
                <th>Comprador</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expedientes as $expediente)
                <tr>
                    <td>{{ $expediente->id }}</td>
                    <td>
                        @if ($expediente->propiedad)
                            {{ $expediente->propiedad->direccion }}
                        @else
                            Propiedad no disponible
                        @endif
                    </td>
                    <td>{{ $expediente->fecha }}</td>
                    <td>{{ $expediente->estado }}</td>
                    <td>{{ $expediente->resultado }}</td>
                    <td>
                        @if ($expediente->comprador)
                            {{ $expediente->comprador->nombre }}
                        @else
                            Comprador no disponible
                        @endif
                    </td>                
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('expediente.create') }}" class="btn btn-primary">Crear Expediente</a>
    <a href="{{ route('expediente.edit', $expediente->id) }}" class="btn btn-primary">Editar</a>
</div>
@endsection