@extends('layout.plantilla')
@section('titulo', 'Inicio')

@section('content')
<div class="row">
    <a href="{{route('libros.index')}}"  class="text-center col-4">
        <div class="card ">
            <div class="card-body">
                <h2><i class="bi bi-book"></i> Libros</h2>
            </div>
        </div>
    </a>
    <a href="{{route('revistas.index')}}"  class=" text-center   col-4">
        <div class="card ">
            <div class="card-body">
                <h2><i class="bi bi-book"></i> Revistas</h2>
            </div>
        </div>
    </a>
    <a href="{{route('bibliografia_digital.index')}}"  class=" text-center   col-4">
        <div class="card">
            <div class="card-body">
                <h2><i class="bi bi-book"></i> Bibliografia Digital</h2>
            </div>
        </div>
    </a>
</div>
<br>
<div class="row">
    <a href="{{route('cuadernos.index')}}"  class="text-center  col-4">
        <div class="card ">
            <div class="card-body">
                <h2><i class="bi bi-book"></i> Cuadernos</h2>
            </div>
        </div>
    </a>
    @if(Auth::user()->rol == '2' || Auth::user()->rol == '1')
        @if (Auth::user()->rol == '2' )
            <a href="{{route('usuario.index')}}"  class=" text-center   col-4">
                <div class="card ">
                    <div class="card-body">
                        <h2><i class="bi bi-person-circle"></i> Usuarios</h2>
                    </div>
                </div>
            </a>
        @endif
        <a href="{{route('prestamos.index')}}"  class=" text-center   col-4">
            <div class="card">
                <div class="card-body">
                    <h2>Prestamos</h2>
                </div>
            </div>
        </a>
    @endif
</div>

@endsection
