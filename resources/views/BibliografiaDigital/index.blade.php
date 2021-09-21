@extends('layout.plantilla')
@section('titulo', 'Bibliografia Digital')

@section('content')
<form class="row align-items-center m-2">
    <div class="col-sm-12 col-md-3">
        <input class="form-control" type="text" name="buscar" id="buscar" placeholder="Buscar">
    </div>
    <div class="col-sm-12 col-md-3">
        <button class="btn btn-dark">Buscar</button>
    </div>

</form>
    @foreach ($bibliografia as $item)
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title"><b>Titulo: </b>{{ $item->titulo }}</h5>
                <p class="card-text"><b>Autor: </b>{{ $item->autor }}</p>
                <p class="card-text"><b>Año: </b>{{ $item->anio }}</p>
                <p class="card-text"><b>Clasificación: </b>{{ $item->clasificacion }}</p>
                <a href="#" class="btn btn-outline-dark ">Ver</a>
            </div>
        </div>
    @endforeach
    {{ $bibliografia->links() }}
@endsection
