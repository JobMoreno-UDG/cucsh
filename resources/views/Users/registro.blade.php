@extends('layout.plantilla')
@section('titulo', 'Cuadernos')

@section('content')
<h1>Registro de Usuario</h1>
<form class="row justify-content-beetwen" action="{{ route('usuario.create') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>

    <div class="col-12">
        <label for="" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo">
    </div>

    <div class="col-12">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="col-12">
        <label for="" class="form-label">Tipo</label>
        <select name="tipo" id="" class="form-control">
            <option value="General">General</option>
            <option value="Trabajador UdG">Trabajador UdG</option>
            <option value="Administrador">Administrador</option>
        </select>
    </div>
    <div class="col-12 m-2 ">
        <button type="submit" class="btn btn-success col-sm-3">Registrar</button>
    </div>
</form>
@endsection
