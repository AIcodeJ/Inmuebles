@extends('home')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Title</title>
</head>
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Propiedad Inmobiliaria</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>¡Ops!</strong> Hubo algunos problemas con los datos ingresados.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('propiedades.update', $propiedad->id) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="direccion" class="col-md-4 control-label">Dirección</label>
                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $propiedad->direccion }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="col-md-4 control-label">Descripción</label>
                                <div class="col-md-6">
                                    <textarea id="descripcion" class="form-control" name="descripcion" required>{{ $propiedad->descripcion }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="valorEstimado">Valor Estimado:</label>
                                <input type="number" name="valorEstimado" id="valorEstimado" class="form-control" value="{{ $propiedad->valorEstimado }}">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="disponible" {{ $propiedad->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                                    <option value="vendida" {{ $propiedad->estado == 'vendida' ? 'selected' : '' }}>Vendida</option>
                                    <option value="ocupada" {{ $propiedad->estado == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
                                    <option value="en proceso" {{ $propiedad->estado == 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="distribucion">Distribución del Inmueble:</label>
                                <input type="text" name="distribucion" id="distribucion" class="form-control" value="{{ $propiedad->distribucion }}">
                            </div>

                            <div class="form-group">
                                <label for="m2Construccion">m² de Construcción:</label>
                                <input type="number" name="m2Construccion" id="m2Construccion" class="form-control" value="{{ $propiedad->m2Construccion }}">
                            </div>

                            <div class="form-group">
                                <label for="m2Superficie">m² de Superficie:</label>
                                <input type="number" name="m2Superficie" id="m2Superficie" class="form-control" value="{{ $propiedad->m2Superficie }}">
                            </div>

                            <div class="form-group">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municipio" id="municipio" class="form-control" value="{{ $propiedad->municipio }}">
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a href="{{ route('propiedades.index') }}" class="btn btn-primary">Guardar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
