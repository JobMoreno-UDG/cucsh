@extends('layout.plantilla')
@section('titulo', 'Cuadernos')

@section('content')
    <form class="row g-3 justify-content-justify">
        <div class="col-auto">
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
        </div>
        <div class="col-auto">
            <select name="" id="" class="form-control">
                <option value="">---</option>
                <option value="">Autor</option>
                <option value="">Titulo</option>
                <option value="">Año</option>
                <option value="">Clasificacion</option>
            </select>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-dark mb-3">Buscar</button>
        </div>

        @if (Auth::user()->rol == 'Administrador')
            <div class="col-sm-12 col-md-5 m-1 ms-auto">
                <a class="col-sm-12 col-auto btn btn-outline-dark" href="{{ route('cuadernos.registro') }}">Añadir
                    Registro</a>
                <a class="col-sm-12  col-auto btn btn-outline-dark" href=" ">Registrar Prestamo</a>
                <a class="col-sm-12  col-auto btn btn-outline-dark" href="">Cerrar Prestamo</a>

            </div>
        @endif
    </form>
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
                    <a href="{{ route('cuadernos.show', $item->clasificacion) }}" class="btn btn-outline-primary ">Ver</a>
                    @if (Auth::user()->rol == 'Administrador')
                        <a href="{{ route('cuadernos.edit', $item->clasificacion) }}"
                            class="btn btn-outline-success ">Editar</a>
                        <a href="" class="btn btn-outline-danger ">Eliminar</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    {{ $cuadernos->links() }}
@endsection
