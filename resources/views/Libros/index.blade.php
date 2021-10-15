@extends('layout.plantilla')
@section('titulo', 'Libros')

@section('content')
    <form class="row g-3 justify-content-justify">
        <div class="col-auto">
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-dark mb-3">Buscar</button>
        </div>
        @if (Auth::user()->rol == 'Administrador')
        <div class="col-sm-12 col-md-5 m-1 ms-auto">

            <a class="col-sm-12 col-auto btn btn-outline-dark" href="{{route('libro.registro')}}">Añadir Registro</a>
            <a class="col-sm-12  col-auto btn btn-outline-dark" href="">Registrar Prestamo</a>
            <a class="col-sm-12  col-auto btn btn-outline-dark" href="">Cerrar Prestamo</a>
        </div>
        @endif
    </form>
    @foreach ($libros as $item)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title"><b>Titulo: </b>{{ $item->titulo }}</h5>
                    </div>
                    <div class="col-auto">
                        <span><b>Autor: </b>{{ $item->autor }}</span>
                    </div>
                    <div class="col-auto">
                        <span><b>Clasificación: </b>{{ $item->clasificacion }}</span>
                    </div>
                    <div class="col-auto">
                        <span><b>Año: </b>{{ $item->anio }}</span>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{ route('libros.show', $item->clasificacion) }}" class="btn btn-outline-primary col-2">Ver</a>
                    <a href="{{ route('libros.edit', $item->clasificacion) }}" class="btn btn-outline-success col-2">Editar</a>
                    <a href="{{ route('libros.edit', $item->clasificacion) }}" class="btn btn-outline-danger col-2">Eliminar</a>
                </div>

            </div>
        </div>
    @endforeach
    {{ $libros->links() }}
@endsection
