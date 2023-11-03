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
                    <div class="panel-heading">Editar Comprador Potencial</div>

                    <div class="panel-body">
                        
                        <form class="form-horizontal" method="POST" action="{{ route('compradores.update', $comprador->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $comprador->nombre }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contacto" class="col-md-4 control-label">Contacto</label>
                                <div class="col-md-6">
                                    <input id="contacto" type="text" class="form-control" name="contacto" value="{{ $comprador->contacto }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="presupuesto" class="col-md-4 control-label">Presupuesto</label>
                                <div class="col-md-6">
                                    <input id="presupuesto" type="number" class="form-control" name="presupuesto" value="{{ $comprador->presupuesto }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="preferencias" class="col-md-4 control-label">Preferencias</label>
                                <div class="col-md-6">
                                    <textarea id="preferencias" class="form-control" name="preferencias" rows="4" required>{{ $comprador->preferencias }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('compradores.index') }}" class="btn btn-primary">Guardar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
