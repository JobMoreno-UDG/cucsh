@extends('layout.plantilla')
@section('title', 'Mostrar Cuaderno')


@section('content')
    <h3><b>Titulo: </b><br>{{ $cuaderno->titulo }}</h3>
    <h5> <b>Autor:</b><br>{{ $cuaderno->autor }}</h5>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Clasificación: </b><br>{{ $cuaderno->clasificacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Año: </b> <br>{{ $cuaderno->anio }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Editorial: </b> <br>{{ $cuaderno->editorial }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Lugar Publicación: </b><br> {{ $cuaderno->lugar_publicacion }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Volumen: </b><br>{{ $cuaderno->volumen }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha de Ingreso: </b> <br>{{ str_replace(' 00:00:00', '',$cuaderno->fecha_ingreso) }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Situación: </b> <br>{{ $cuaderno->situacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Tómo o Número: </b><br> {{ $cuaderno->tomo_numero }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Páginas: </b><br>{{ $cuaderno->paginas }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Serie: </b> <br>{{ $cuaderno->serie }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>ISBN o ISSN: </b> <br>{{ $cuaderno->isbn_issn }}</span>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Obtencion: </b><br>{{ $info->obtencion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Resguardo: </b> <br>{{ $info->resguardo }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Contenido: </b> <br>{{ $info->contenido }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Código de Barras: </b><br>{{ $info->codigo_barras }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Inventario: </b> <br>{{ $info->inventario }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha Publicación: </b> <br>{{ ($info->fecha_publicacion == 0 ) ? 'Desconocida' : str_replace(' 00:00:00', '',$info->fecha_publicacion); }}</span>
        </div>
    </div>
    @if (Auth::user()->rol == 'Administrador')
        <a href="{{ route('cuadernos.edit', ['cuaderno' => $cuaderno->clasificacion]) }}"
            class="btn btn-outline-primary col-sm-3">Editar</a>
    @endif
    <a class="btn btn-outline-dark col-sm-3" href="{{ route('cuadernos.index') }}">Regresar</a>
@endsection()
