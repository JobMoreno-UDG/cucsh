@extends('layout.plantilla')
@section('title', 'Mostrar Cuaderno')


@section('content')
    <h3><b>Titulo: </b><br>{{ $libro->titulo }}</h3>
    <h5> <b>Autor:</b><br>{{ $libro->autor }}</h5>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Clasificación: </b><br>{{ $libro->clasificacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Año: </b> <br>{{ $libro->anio }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Editorial: </b> <br>{{ $libro->editorial }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Lugar Publicación: </b><br> {{ $libro->lugar_publicacion }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Volumen: </b><br>{{ $libro->volumen }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Fecha de Ingreso: </b> <br>{{ $libro->fecha_ingreso}}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Situación: </b> <br>{{ $libro->situacion }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Tómo o Número: </b><br> {{ $libro->tomo_numero }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <span><b>Páginas: </b><br>{{ $libro->paginas }}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>Serie: </b> <br>{{ $libro->serie}}</span>
        </div>
        <div class="col-sm-12 col-md-3">
            <span><b>ISBN o ISSN: </b> <br>{{ $libro->isbn_issn }}</span>
        </div>
    </div>
<hr>

<a href="{{route('libros.edit',['libro' => $libro->clasificacion])}}" class="btn btn-outline-success">Editar</a>
@endsection()
