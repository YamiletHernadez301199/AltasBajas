@extends('layouts/main')
@section('contenido')
    <div class="container my-4">
        <h2>
            Actualizar
        </h2>
        <div class="row my-4">
            <div class="col">
                
                <form action="{{ route('update', $items->id)}}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="row g-2" >
                        <div class="col-md">
                            <select class="form-select my-4" aria-label="Default select example" name="tipo" id="tipo" required>
                                <option value="{{ $items->tipo}}" selected disabled>{{ $items->tipo}}</option>
                                <option value="Gasto">Gasto</option>
                                <option value="Ganancia">Ganancia</option>
                            </select>                            
                        </div>
                        <div class="col-md">
                            <select class="form-select my-4" aria-label="Default select example" name="categoria" id="categoria" required>
                                <option value="{{ $items->categoria}}" selected disabled>{{ $items->categoria}}</option>
                                <option value="Soporte">Soporte</option>
                                <option value="Desarrollo">Desarrollo</option>
                                <option value="Cine">Cine</option>
                                <option value="Desarrollo de pagina web">Desarrollo de pagina web</option>
                                <option value="Instalación de S.O">Instalación de S.O</option>
                                <option value="Mantenimiento">Mantenimiento</option>
                                <option value="Tacos">Tacos</option>
                                <option value="Pizza">Pizza</option>
                                <option value="Software Gestión Empresarial">Software Gestión Empresarial</option>
                                <option value="Servicio de prototipado">Servicio de prototipado</option>
                                <option value="Curso">Curso</option>
                                <option value="Regalos">Regalos</option>
                                <option value="Desarrollo de aplicaciones">Desarrollo de aplicaciones</option>
                                <option value="Monitorizar y gestionar las redes">Monitorizar y gestionar las redes</option>
                                <option value="Realizar inventario de equipos">Realizar inventario de equipos</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="">
                                <label for="exampleFormControlInput1" class="form-label">Cantidad <i class="fa-solid fa-hand-holding-dollar"></i></label>
                                <input type="number" name="cantidad" id="cantidad"
                                class="form-control" placeholder="Escriba una cantidad" value="{{ $items->cantidad}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="my-1">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Descripcion">{{$items->descripcion}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-sm btn-primary text-decoration-none text-white border border-2 rounded" id="edit-btn">
                        Actualizar
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </form>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/" class="btn btn-success me-md-2">Regresar
                        <i class="fa-solid fa-rotate-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
