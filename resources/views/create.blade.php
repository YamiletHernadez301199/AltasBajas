@extends('layouts/main')
@section('contenido')
    <div class="container my-4">
        <h2>
            Altas y Bajas
        </h2>
        <div class="row my-4">
            <div class="col">
                
                <form action="/store" method="post" >
                    @csrf
                    @method('POST')
                    <div class="row g-2" >
                        <div class="col-md">
                            <label for="exampleFormControlTextarea1" class="form-label">Selecciona el tipo de accion a realizar</label>
                            <select class="form-select" aria-label="Default select example" name="tipo" id="tipo" required>
                                {{-- <option>Selecciona el tipo de acción a realizar </option> --}}
                                <option value="Gasto">Gasto</option>
                                <option value="Ganancia">Ganancia</option>
                            </select>                            
                        </div>
                        <div class="col-md">
                            <label for="exampleFormControlTextarea1" class="form-label">Elige la categoria</label>
                            <select class="form-select" aria-label="Default select example" name="categoria" id="categoria" required>
                                {{-- <option selected>Categoria</option> --}}
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
                                class="form-control" placeholder="Escriba una cantidad">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="my-1">
                                <label for="exampleFormControlTextarea1" class="form-label">Descripción <i class="fa-solid fa-address-book fa-lg"></i></label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-sm btn-primary text-decoration-none text-white border border-2 rounded" id="add-btn">
                        Guardar
                        <i class="fa-solid fa-download"></i>
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
