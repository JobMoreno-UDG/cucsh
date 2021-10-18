@extends('layout.plantilla')
@section('titulo', 'Busqueda - Cuadernos')

@section('content')
    @if (count($libros) > 0)
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
                    <a href="{{ route('libros.show', $item->clasificacion) }}"
                        class="btn btn-outline-primary col-sm-2">Ver</a>
                    @if (Auth::user()->rol == '2')
                        <a href="{{ route('libros.edit', $item->clasificacion) }}"
                            class="btn btn-outline-success col-sm-2">Editar</a>
                        <a href="{{ route('libros.delete', $item->clasificacion) }}"
                            class="btn btn-outline-danger col-sm-2">Eliminar</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    {{ $libros->links() }}
    @else
        <h1>No hay coincidencias</h1>
    @endif
    <a href="{{route('libros.index')}}" class="btn btn-outline-dark col-2">Regresar</a>
@endsection
