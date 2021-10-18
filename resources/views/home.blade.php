@extends('layout.plantilla')
@section('titulo', 'Inicio')

@section('content')
    <h1>Bienvenido, Página de Inicio</h1>
    @if (Auth::user()->rol == '2')
        <a href="{{route('usuario.registro')}}" class="btn btn-primary">Registrar Usuario</a>
    @endif
@endsection
