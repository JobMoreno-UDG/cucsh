@extends('layout.plantilla')
@section('titulo', 'Busqueda - Cuadernos')

@section('content')
    @if (count($cuadernos) > 0)
        @foreach ($cuadernos as $item)
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
                        <a href="{{ route('cuadernos.show', $item->clasificacion) }}"
                            class="btn btn-outline-primary col-sm-2">Ver</a>
                        @if (Auth::user()->rol == '2' || Auth::user()->rol == '1')
                            <a href="{{ route('cuadernos.edit', $item->clasificacion) }}"
                                class="btn btn-outline-success col-sm-2">Editar</a>
                            @if (Auth::user()->rol == '2')
                                <a href="{{ route('cuadernos.delete', $item->clasificacion) }}"
                                    class="btn btn-outline-danger col-sm-2">Eliminar</a>
                            @endif

                            <a class="col-sm-12  col-auto btn btn-outline-dark"
                                href="{{ route('prestamos.registro', ['Cuadernos', $item->clasificacion]) }}">Registrar
                                Prestamo</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <hr>
        <h1>No hay coincidencias</h1>
    @endif
    <a class="btn btn-outline-dark col-3" href="{{ route('cuadernos.index') }}">Regresar</a>
@endsection
