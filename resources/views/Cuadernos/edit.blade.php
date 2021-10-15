@extends('layout.plantilla')
@section('titulo', 'Cuadernos')

@section('content')
<form action="{{route('cuadernos.update')}}" class="row justify-content-bettwen" method="POST">
    @csrf
    <div class="col-auto">
        <label for="clasificacion" class="form-label">Clasificación</label>
        <input type="text" name="clasificacion" name="clasificacion" class="form-control" value="{{$cuaderno->clasificacion}}">
    </div>
    <div class="col-8">
        <label for="titulo" class="form-label">Titulo</label>
        <input class="form-control" name="titulo"  id="titulo"value="{{$cuaderno->titulo}}"/>
    </div>

    <div class="col-8">
        <label for="autor" class="form-label">Autor</label>
        <input class="form-control"  type="text" name="autor" id="autor" value="{{$cuaderno->autor}}">
    </div>
    <div class="col-auto">
        <label for="anio" class="form-label">Año</label>
        <input class="form-control"  type="text" name="anio" id="anio" value="{{$cuaderno->anio}}">
    </div>
    <div class="col-auto">
        <label for="volumen" class="form-label">Volumen</label>
        <input class="form-control"  type="text" name="volumen" id="volumen" value="{{$cuaderno->volumen}}">
    </div>
    <div class="col-8">
        <label for="editorial" class="form-label">Editorial</label>
        <input class="form-control"  type="text" name="editorial" id="editorial" value="{{$cuaderno->editorial}}">
    </div>
    <div class="col-8">
        <label for="lugar_publicacion" class="form-label">Lugar de Publicación</label>
        <input class="form-control"  type="text" name="lugar_publicacion" id="lugar_publicacion" value="{{$cuaderno->lugar_publicacion}}">
    </div>

    <div class="col-auto">
        <label for="situacion" class="form-label">Situacion</label>
        <input class="form-control"  type="text" name="situacion" id="situacion" value="{{$cuaderno->situacion}}">
    </div>
    <div class="col-8">
        <label for="serie" class="form-label">Serie</label>
        <input class="form-control"  type="text" name="serie" id="serie" value="{{$cuaderno->serie}}">
    </div>
    <div class="col-auto">
        <label for="tomo_numero" class="form-label">Tomo o Numero</label>
        <input class="form-control"  type="text" name="tomo_numero" id="tomo_numero" value="{{$cuaderno->tomo_numero}}">
    </div>
    <div class="col-auto">
        <label for="paginas" class="form-label">Páginas</label>
        <input class="form-control"  type="text" name="paginas" id="paginas" value="{{$cuaderno->paginas}}">
    </div>

    <div class="col-auto">
        <label for="isbn_issn" class="form-label">ISBN o ISSN</label>
        <input class="form-control"  type="text" name="isbn_issn" id="isbn_issn" value="{{$cuaderno->isbn_issn}}">
    </div>
    <div class="col-auto">
        <label for="codigo_barras" class="form-label">Código de Barras</label>
        <input class="form-control"  type="text" name="codigo_barras" id="codigo_barras" value="{{$info->codigo_barras}}">
    </div>
    <div class="col-3">
        <label for="obtencion" class="form-label">Obtención</label>
        <input class="form-control"  type="text" name="obtencion" id="obtencion" value="{{$info->obtencion}}">
    </div>

    <div class="col-auto">
        <label for="reguardo" class="form-label">Resguardo</label>
        <input class="form-control"  type="text" name="reguardo" id="reguardo" value="{{$info->reguardo}}">
    </div>
    <div class="col-8">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control" name="contenido">{{$info->contenido}}</textarea>
    </div>

    <div class="col-auto">
        <label for="prestadoA" class="form-label">Prestado A</label>
        <input class="form-control"  type="text" name="prestadoA" id="prestadoA" value="{{$info->prestadoA}}">
    </div>
    <div class="col-auto">
        <label for="inventario" class="form-label">Inventario</label>
        <input class="form-control"  type="text" name="inventario" id="inventario" value="{{$info->inventario}}">
    </div>
    <div class="col-auto">
        <label for="fecha_publicacion" class="form-label">Fecha Publicación</label>
        <input class="form-control"  type="date" name="fecha_publicacion" id="fecha_publicacion" value="{{$info->fecha_publicacion}}">
    </div>
    <div class="col-auto">
        <label for="fecha_prestadoA" class="form-label">Fecha Ingreso</label>
        <input class="form-control"  type="date" name="fecha_ingreso" id="fecha_ingreso" value="{{str_replace(' 00:00:00', '',$cuaderno->fecha_ingreso)}}">
    </div>
    <div class="col-12 m-2 ">
        <button type="submit" class="btn btn-outline-success col-sm-3">Actualizar</button>
        <a class="btn btn-outline-dark col-sm-3" href="{{route('cuadernos.index')}}">Regresar</a>
    </div>
</form>
@endsection
