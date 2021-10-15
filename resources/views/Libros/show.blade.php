@extends('layout.plantilla')
@section('titulo', 'Mostrar Cuaderno')


@section('content')
    <h3><b>Titulo: </b><br>{{ $libro->titulo }}</h3>
    <h5> <b>Autor:</b><br>{{($libro->autor == '') ?'-' :$libro->autor }}</h5>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Clasificación: </b><br>{{ $libro->clasificacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Año: </b> <br>{{($libro->anio == 0) ?'-' :$libro->anio }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Editorial: </b> <br>{{($libro->editorial == '') ?'-' :$libro->editorial }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Lugar Publicación: </b><br> {{($libro->lugar_publicacion == '') ?'-' :$libro->lugar_publicacion }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Volumen: </b><br>{{($libro->volumen == '') ?'-' : $libro->volumen }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha de Ingreso: </b> <br>{{($libro->fecha_ingreso == '') ?'-' : $libro->fecha_ingreso }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Situación: </b> <br>{{($libro->situacion == '') ?'-' : $libro->situacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Tómo o Número: </b><br> {{($libro->tomo_numero == '') ?'-' : $libro->tomo_numero }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Páginas: </b><br>{{($libro->paginas == 0) ?'-' :$libro->paginas }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Serie: </b> <br>{{($libro->serie == '') ?'-' :$libro->serie }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>ISBN o ISSN: </b> <br>{{($libro->isbn_issn == '') ?'-' : $libro->isbn_issn }}</span>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Donación: </b><br>{{($libro->obtencion == '') ?'-' : $info->obtencion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Resguardo: </b> <br>{{($libro->resguardo == '') ?'-' : $info->resguardo }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Space: </b><br>{{($libro->space == '') ?'-' :  $info->space }}</span>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Código de barras: </b><br>{{($libro->codigo_barras == '') ?'-' :$info->codigo_barras }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Inventario: </b> <br>{{($libro->inventario == '') ?'-' : $info->inventario }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha Publicación: </b> <br>{{($libro->fecha_publicacion == '') ?'-' : $info->fecha_publicacion }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <span><b>Contenido: </b> <br>{{($libro->contenido == '') ?'-' :$info->contenido }}</span>
        </div>
    </div>

<br/>
    <a href="{{ route('libros.edit', ['libro' => $libro->clasificacion]) }}"
        class="btn btn-outline-success col-2">Editar</a>
@endsection()
