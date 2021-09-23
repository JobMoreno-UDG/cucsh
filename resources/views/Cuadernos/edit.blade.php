@extends('layout.plantilla')
@section('titulo', 'Cuadernos')

@section('content')
<form action="" class="row justify-content-center">
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
        <input class="form-control"  type="text" name="codigo_barras" id="codigo_barras" value="{{$cuaderno->codigo_barras}}">
    </div>
    <div class="col-auto">
        <label for="obtencion" class="form-label">Obtención</label>
        <input class="form-control"  type="text" name="obtencion" id="obtencion" value="{{$cuaderno->obtencion}}">
    </div>

    <div class="col-8"></div>
</form>
@endsection