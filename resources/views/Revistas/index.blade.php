
@extends('layout.plantilla')
@section('titulo', 'Revistas')

@section('content')


<form class="row g-3 justify-content-justify">
    <div class="col-auto">
      <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark mb-3">Buscar</button>
    </div>
    <div class="col-sm-12 col-md-5 m-1 ms-auto">
        <a class="col-sm-12 col-auto btn btn-outline-dark" href="">Añadir Registro</a>
        <a class="col-sm-12  col-auto btn btn-outline-dark" href="{{ route('inicio') }}">Registrar Prestamo</a>
        <a class="col-sm-12  col-auto btn btn-outline-dark" href="">Cerrar Prestamo</a>
    </div>
  </form>
  @endsection