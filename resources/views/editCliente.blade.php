@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cliente</div>
            <div class="card-body">
                <form id="frmClientes" method="POST" action="{{url("clientes", [$clientes])}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" id="documentoid">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="text" id="documentoid" name="documentoid" value="{{ $clientes->documentoid }}" class="form-control" placeholder="Documento de identidad" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="nombre" name="nombre" value="{{ $clientes->nombre }}" class="form-control" placeholder="Tu Nombre"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" id="telefono" name="telefono" value="{{ $clientes->telefono }}" class="form-control" placeholder="Telefono"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" name="email" value="{{ $clientes->email }}" class="form-control" placeholder="Email"  required>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success"  id="btnGuardar"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection