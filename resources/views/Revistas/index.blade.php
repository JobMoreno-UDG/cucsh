@extends('layout.plantilla')
@section('titulo', 'Revistas')

@section('content')
    <form class="row g-3 justify-content-justify" method="post" action="{{ route('revistas.buscar') }}">
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
            <div class="col-sm-12 col-md-5 ms-auto">
                <a class="col-sm-12 col-auto btn btn-primary" href="{{ route('revistas.registro') }}">Añadir
                    Registro</a>
            </div>
        @endif
    </form>
    <div class="row justify-content-end align-middle">
        <div class="col-auto">
            <span class="btn">Total de Regsitros: {{$total}}</span>

        </div>
        @if (Auth::user()->rol == '2' or Auth::user()->rol == '1')
            <div class="col-auto">
                <a href="{{route('revistas.export')}}" class="btn">Expotar a Excel <i class="bi bi-arrow-down-circle"></i></a>
            </div>
        @endif
    </div>
    @foreach ($revista as $item)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title"><b>Titulo: </b>{{ $item->titulo == '' ? '-' : $item->titulo }}</h5>
                    </div>
                    <div class="col-auto">
                        <span><b>Autor: </b>{{ $item->autor == '' ? '-' : $item->autor }}</span>
                    </div>
                    <div class="col-auto">
                        <span><b>Clasificación: </b>{{ $item->clasificacion == '' ? '-' : $item->clasificacion }}</span>
                    </div>
                    <div class="col-auto">
                        <span><b>Año: </b>{{ $item->anio == 0 ? '-' : $item->anio }}</span>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="{{ route('revistas.show', $item->clasificacion) }}"
                        class="btn btn-outline-primary col-2">Ver</a>
                    @if (Auth::user()->rol == '2' || Auth::user()->rol == '1')
                        <a href="{{ route('revistas.edit', $item->clasificacion) }}"
                            class="btn btn-outline-success col-2">Editar</a>
                        @if (Auth::user()->rol == '2')
                            <a href="{{ route('revistas.delete', $item->clasificacion) }}"
                                class="btn btn-outline-danger col-2">Eliminar</a>
                        @endif
                        <a class="col-sm-12  col-auto btn btn-outline-dark"
                            href="{{ route('prestamos.registro', ['Revistas', $item->clasificacion]) }}">Registrar
                            Prestamo</a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach


    {{ $revista->links() }}
@endsection
