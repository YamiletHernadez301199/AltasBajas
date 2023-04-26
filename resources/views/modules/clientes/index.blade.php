@extends('layouts/main')
@section('contenido')
<div class="container-fluid">
    <h1 class="m-4 text-center">
        Altas y Bajas
    </h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('logout') }}" class="btn btn-danger">
            <i class="fa-solid fa-arrow-left"></i>
            Salir
        </a>
    </div>
    <div class="row m-4">
        <div class="col">
            <a href="/create" class="btn btn-primary">
                <i class="fa-solid fa-plus"></i>
                Agregar
            </a>
            <hr>
            <div class="table-responsive">
                <table class="table table-dark table-hover"  id="Mytabla">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoría</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Eliminar</th>
                            <th>Editar</th>
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
                            <td>
                                <form action="{{ route('datos.delete', $item->id) }}" method="POST" class="formulario">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete text-white border border-2 rounded" onclick="eliminarDatos()">
                                        Eliminar
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                
                                </form>
                                   
                            </td> 
                            <td>
                                <a href="{{ route('edit', $item->id) }}"
                                  class="btn btn-sm btn-warning btn-update text-white border border-2 rounded">
                                  Editar
                                  <i class="fas fa-edit fa-fw"></i>
                                </a>
                              </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="row my-4 d-flex justify-content-center">
        <div class="col-6">
            <div class="table-responsive">
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
</div>
@endsection
