@extends('layout.plantilla')
@section('title', 'Mostrar Bibliografia Digital')


@section('content')
<h3><b>Titulo: </b><br>{{ $bibliografia->titulo }}</h3>
<h5> <b>Autor:</b><br>{{ $bibliografia->autor }}</h5>
<div class="row">
    <div class="col-sm-12 col-md-3">
        <span><b>Clasificación: </b><br>{{ $bibliografia->clasificacion }}</span>
    </div>
    <div class="col-sm-12 col-md-3">
        <span><b>Año: </b> <br>{{ $bibliografia->anio }}</span>
    </div>
</div>
@endsection()
