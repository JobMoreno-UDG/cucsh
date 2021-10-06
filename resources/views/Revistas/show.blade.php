@extends('layout.plantilla')
@section('titulo', 'Revistas')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3><b>Titulo: </b><br>{{ $revista->titulo }}</h3>
        </div>
        <div class="col-sm-12">
            <h5> <b>Autor:</b><br>{{ $revista->autor }}</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Clasificación: </b><br>{{ $revista->clasificacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Año: </b> <br>{{ $revista->anio }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Editorial: </b> <br>{{ $revista->editorial }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Lugar Publicación: </b><br> {{ $revista->lugar_publicacion }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Volumen: </b><br>{{ $revista->volumen }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha de Ingreso: </b> <br>{{ $revista->fecha_ingreso}}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Situación: </b> <br>{{ $revista->situacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Tómo o Número: </b><br> {{ $revista->tomo_numero }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Páginas: </b><br>{{ $revista->paginas }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Serie: </b> <br>{{ $revista->serie}}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>ISBN o ISSN: </b> <br>{{ $revista->isbn_issn }}</span>
        </div>
    </div>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-3">
        <span><b>Obtencion: </b><br>{{ $info->obtencion }}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Resguardo: </b> <br>{{ $info->resguardo}}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Contenido: </b> <br>{{ $info->contenido }}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Prestado A: </b><br> {{ $info->prestadoA }}</span>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-3">
        <span><b>Código de Barras: </b><br>{{ $info->codigo_barras }}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Inventario: </b> <br>{{ $info->inventario}}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Fecha Publicación: </b> <br>{{ $info->fecha_publicacion }}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Fecha Prestado A: </b><br> {{ $info->fecha_prestadoA }}</span>
    </div>
</div>
<a href="{{route('cuadernos.edit',['cuaderno' => $cuaderno->clasificacion])}}" class="btn btn-warning">Editar</a>
@endsection
