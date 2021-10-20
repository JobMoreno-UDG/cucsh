@extends('layout.plantilla')
@section('titulo', 'Cuadernos')

@section('content')
    <form class="row g-3 justify-content-justify" method="POST" action="{{ route('cuadernos.buscar') }}">
        @csrf
        <div class="col-auto">
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar">
            @error('buscar')
                <small>{{ $message }}</small>
                <br>
            @enderror
        </div>
        <div class="col-auto">
            <select name="buscar_por" id="" class="form-control">
                <option value="">---</option>
                <option value="autor">Autor</option>
                <option value="titulo">Titulo</option>
                <option value="anio">Año</option>
                <option value="clasificacion">Clasificacion</option>
            </select>
            @error('buscar_por')
                <small>{{ $message }}</small>
                <br>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-dark mb-3">Buscar</button>
        </div>

        @if (Auth::user()->rol == '2' || Auth::user()->rol == '1')
            <div class="col-sm-12 col-md-5 m-1 ms-auto">
                <a class="col-sm-12 col-auto btn btn-outline-dark" href="{{ route('cuadernos.registro') }}">Añadir
                    Registro</a>

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
                    <a href="{{ route('cuadernos.show', $item->clasificacion) }}"
                        class="btn btn-outline-primary col-sm-2">Ver</a>
                    @if (Auth::user()->rol == '2' || Auth::user()->rol == '1')
                        <a href="{{ route('cuadernos.edit', $item->clasificacion) }}"
                            class="btn btn-outline-success col-sm-2">Editar</a>
                        @if (Auth::user()->rol == '2')
                            <a href="{{ route('cuadernos.delete', $item->clasificacion) }}"
                                class="btn btn-outline-danger col-sm-2">Eliminar</a>
                        @endif
                        <a class="col-sm-12  col-auto btn btn-outline-dark" href="{{route('prestamos.registro',['Cuadernos',$item->clasificacion])}}">Registrar Prestamo</a>

                    @endif
                </div>
            </div>
        </div>
    @endforeach
    {{ $cuadernos->links() }}
@endsection
