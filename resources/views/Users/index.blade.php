@extends('layout.plantilla')
@section('titulo', 'Usuarios')

@section('content')
<div class="row d-flex justify-content-end">
    <a href="{{route('usuario.registro')}}" class="btn btn-primary">Registrar Usuario</a>
</div>
<br/>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
            </tr>
        </thead>
        @foreach ($usuarios as $item)
            <tbody>
                <tr>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->email }}</td>
                    @if ($item->rol == '0')

                        <td>General</td>
                    @endif
                    @if ($item->rol == '1')

                        <td>Trabajador UDG</td>
                    @endif
                    @if ($item->rol == '2')

                        <td>Administrador</td>
                    @endif

                </tr>
            </tbody>

        @endforeach
    </table>
</div>
@endsection
