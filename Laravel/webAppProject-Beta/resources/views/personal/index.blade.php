@extends('home')

@section('contenido')
<div class="container">
    <h1>Lista de Personal</h1>

    <table class="table">
        <tbody>
            @foreach ($personal as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->usuario }}</td>
                <td>{{ $persona->contraseña }}</td>
                <td>{{ $persona->rol }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('personal.create') }}">Crear un registro</a>
    <a href="{{ route('personal.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
    
</div>
@endsection
