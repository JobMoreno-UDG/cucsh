@extends('layout.plantilla')
@section('titulo', 'Ver - Usuarios')

@section('content')
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
@endsection
