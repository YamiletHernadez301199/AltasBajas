@extends('layouts/main')
@section('contenido')
<div class="container">
    <h1 class="my-4">
        Altas y Bajas
    </h1>
    <div class="row my-4">
        <div class="col">
            <a href="/create" class="btn btn-primary">
                Agregar
            </a>
            <hr>
            <table class="table table-dark table-hover"  id="tabla">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th>{{ $item->tipo}}</th>
                        <td>{{ $item->categoria}}</td>
                        <td>{{ $item->cantidad}}</td>
                        <td>{{ $item->descripcion}}</td> 
                        <td>{{ date('Y:m:d', strtotime($item->created_at)) }}</td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row my-4">
        <div class="col">
            <table class="table table-dark table-hover"  id="tabla">
                <thead>
                    <tr>
                        <th style="background-color:green">Tipo</th>
                        <th style="background-color:green">Total Cantidad</th>
                        <th style="background-color: red">Tipo</th>
                        <th style="background-color: red">Total Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ventas = DB::table('info')
                        ->select('tipo', DB::raw('SUM(cantidad) as total_cantidad'))
                        ->groupBy('tipo')
                        ->get();
                    @endphp
                    @foreach ($ventas as $venta)
                        <th >{{ $venta->tipo }}</th>
                        <td>{{ $venta->total_cantidad }}</td>
                        {{-- <p>Tipo: {{ $venta->tipo }}</p>
                        <p>Cantidad total: {{ $venta->total_cantidad }}</p> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection