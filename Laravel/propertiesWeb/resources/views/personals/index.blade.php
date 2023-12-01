@extends('layouts.app')

@section('content')
    <h1>Personal</h1>

    <!-- Botón para agregar nuevo personal -->
    <a href="{{ route('personals.create') }}" class="btn btn-primary">Add Personal</a>

    <!-- Tabla para mostrar la lista de personal -->
    @if(!empty($personals) && count($personals) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personals as $personal)
                <tr>
                    <!-- Mostrar información de cada personal -->
                    <td>{{ $personal->id }}</td>
                    <td>{{ $personal->User }}</td>
                    <td>{{ $personal->Role }}</td>
                    
                    <!-- Acciones disponibles para cada registro -->
                    <td>
                        <!-- Ver detalles del personal -->
                        <a href="{{ route('personals.show', $personal->id) }}" class="btn btn-info">View</a>
                        
                        <!-- Editar información del personal -->
                        <a href="{{ route('personals.edit', $personal->id) }}" class="btn btn-warning">Edit</a>
                        
                        <!-- Funcionalidad de eliminación -->
                        <form action="{{ route('personals.destroy', $personal->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <tr>
        <p colspan="6">No potential personals available.</p>
    </tr>
    @endif
@endsection
