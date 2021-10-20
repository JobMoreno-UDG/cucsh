@extends('layout.plantilla')
@section('titulo', 'Prestamos')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prestado A</th>
            <th scope="col">Fecha Prestado</th>
            <th scope="col">Fecha Entregado</th>
            <th scope="col">Status</th>
            <th scope="col">Cerrar prestamo</th>
        </tr>
    </thead>
    @foreach ($prestamos as $item)
        <tbody>
            <td>{{$item->id}}</td>
            <td>{{$item->clasificacion}}</td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->prestado_A}}</td>
            <td>{{$item->fecha_prestamo}}</td>
            <td>{{($item->fecha_entrega == Null)? 'No entregado' : $item->fecha_entrega}}</td>
            <td>{{$item->status}}</td>
            @if ($item->status == 'Abierto')
                <td><a class="col-sm-12  col-auto btn btn-sm btn-outline-danger " href="{{route('prestamos.cerrar',[$item->clasificacion,$item->tipo,$item->fecha_prestamo])}}">Cerrar Prestamo</a></td>
            @endif

        </tbody>

    @endforeach
</table>
@endsection
