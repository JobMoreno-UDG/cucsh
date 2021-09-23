@extends('layout.plantilla')
@section('titulo',' Bibliografia Digital')

@section('content')
<form  class="row justify-content-beetwen" action="">
<div class="col-12">
    <label for="" class="form-label">Titulo</label>
    <input type="text" class="form-control" value="{{$bibliografia->titulo}}">
</div>
<div class="col-12">
    <label for="" class="form-label">Autor</label>
    <input type="text" class="form-control" value="{{$bibliografia->autor}}">
</div>
<div class="col-12">
    <label for="" class="form-label">Clasificación</label>
    <input type="text" class="form-control" value="{{$bibliografia->clasificacion}}">
</div>
<div class="col-12">
    <label for="" class="form-label">Año</label>
    <input type="text" class="form-control" value="{{$bibliografia->anio}}">
</div>
<div class="col-12 m-2 ">
    <button type="submit" class="btn btn-warning col-sm-3">Actualizar</button>
    <a class="btn btn-outline-dark col-sm-3" href="{{route('bibliografia_digital.show',$bibliografia->clasificacion)}}">Regresar</a>
</div>

</form>

@endsection
