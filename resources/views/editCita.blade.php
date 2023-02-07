@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">Editar Cita</div>
            <div class="card-body">
                <form id="frmCitas" method="POST" action="{{url("citas", [$citas])}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" id="id">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="date" id="fecha" name="fecha" value="{{ $citas->fecha }}" class="form-control" placeholder="fecha de la cita" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="time" id="hora" name="hora" value="{{ $citas->hora }}" class="form-control" placeholder="Hora"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <select id="documentoid" name="documentoid" class="form-select" required>
                            <option value="" >Mascota</option>
                            @foreach($mascotas as $row) 
                            @if ($row->codigo_mascota == $citas->codigo_mascota) )
                                <option selected value="{{ $row->codigo_mascota}}">{{ $row->nombre_mascota}}</option>
                            @else 
                            <option value="{{ $row->codigo_mascota}}">{{ $row->nombre_mascota}}</option>
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