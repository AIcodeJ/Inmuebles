@extends('home')

@section('contenido')
    <div class="container">
        <h1>Crear Comprador Potencial</h1>
        <form method="POST" action="{{ route('compradores.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" name="contacto" class="form-control">
            </div>
            <div class="form-group">
                <label for="presupuesto">Presupuesto:</label>
                <input type="number" name="presupuesto" class="form-control">
            </div>
            <div class="form-group">
                <label for="preferencias">Preferencias:</label>
                <input type="text" name="preferencias" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
