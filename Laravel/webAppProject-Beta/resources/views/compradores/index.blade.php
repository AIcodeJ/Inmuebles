@extends('home')

@section('contenido')
<div class="container">
    <h1>Compradores Potenciales</h1>
    
    @if (count($compradores) > 0)
    <table class="table">
        <tbody>
            @foreach ($compradores as $comprador)
            <tr>
                <td>{{ $comprador->id }}</td>
                <td>{{ $comprador->nombre }}</td>
                <td>{{ $comprador->contacto }}</td>
                <td>{{ $comprador->presupuesto }}</td>
                <td>{{ $comprador->preferencias }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No hay compradores potenciales registrados.</p>
    @endif
    <a href="{{ route('compradores.create') }}" class="btn btn-primary">Crear un registro</a>
    <a href="{{ route('compradores.edit', $comprador->id) }}" class="btn btn-primary">Editar</a>
    
</div>
@endsection