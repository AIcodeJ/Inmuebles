@extends('home')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Información del Personal</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('personal.update', $personal->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" id="usuario" name="usuario" value="{{ $personal->usuario }}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Deja en blanco si no deseas cambiarla">
                            </div>

                            <div class="form-group">
                                <label for="rol">Rol</label>
                                <select id="rol" name="rol" class="form-control">
                                    <option value="admin" @if($personal->rol == 'admin') selected @endif>Administrador</option>
                                    <option value="empleado" @if($personal->rol == 'empleado') selected @endif>Empleado</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
