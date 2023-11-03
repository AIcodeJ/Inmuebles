@extends('home')

@section('contenido')
<div class="container">
    <h1>Crear Propiedad</h1>
        <form method="POST" action="{{ route('propiedades.store') }}">
            @csrf

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name='direccion' class="form-control" id="direccion" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name='descripcion' class="form-control" id="descripcion" required></textarea>
            </div>

            <div class="form-group">
                <label for="valor_estimado">Valor Estimado</label>
                <input type="number" name='valor_estimado' class="form-control" id="valor_estimado" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <select name='estado' class="form-control" id="estado" required>
                    <option value="Disponible">Disponible</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Vendida">Vendida</option>
                    <option value="Ocupada">Ocupada</option>
                </select>
            </div>

            <div class="form-group">
                <label for="distribucion">Distribución del Inmueble</label>
                <textarea name='distribucion_inmueble' class="form-control" id="distribucion" required></textarea>
            </div>

            <div class="form-group">
                <label for="m2_construccion">m² de Construcción</label>
                <input type="number" name='metros_construccion' class="form-control" id="m2_construccion" required>
            </div>

            <div class="form-group">
                <label for="m2_superficie">m² de Superficie</label>
                <input type="number" name='metros_superficie' class="form-control" id="m2_superficie" required>
            </div>

            <div class="form-group">
                <label for="municipio">Municipio</label>
                <input type="text" name='municipio' class="form-control" id="municipio" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
</div>
@endsection
