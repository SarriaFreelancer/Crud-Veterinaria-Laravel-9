@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cliente</div>
            <div class="card-body">
                <form id="frmMascotas" method="POST" action="{{url("mascotas", [$mascotas])}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" id="codigo_mascota">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="number" id="codigo_mascota" name="codigo_mascota" value="{{ $mascotas->codigo_mascota }}" class="form-control" placeholder="Codigo Mascota" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="nombre_mascota" name="nombre_mascota" value="{{ $mascotas->nombre_mascota }}" class="form-control" placeholder="Nombre"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" id="tipo_mascota" name="tipo_mascota" value="{{ $mascotas->tipo_mascota }}" class="form-control" placeholder="Tipo de mascota"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <select id="documentoid" name="documentoid" class="form-select" required>
                            <option value="" >Cliente</option>
                            @foreach($clientes as $row) 
                            @if ($row->documentoid == $mascotas->documentoid)
                                <option selected value="{{ $row->documentoid}}">{{ $row->nombre}}</option>
                            @else 
                                <option value="{{ $row->documentoid}}">{{ $row->nombre}}</option>
                            @endif
                            @endforeach
                        </select>
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