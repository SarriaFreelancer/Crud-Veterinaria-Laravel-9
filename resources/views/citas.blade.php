@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark openModal" data-bs-toggle="modal" data-bs-target="#modalCitas">
                <i class="fa-solid fa-circle-plus"></i>  Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover  position-relative">
                <thead><tr><th>#</th><th>FECHA</th><th>HORA</th><th>MASCOTA</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                <tbody class="table-group-divider" id="contenido">
                    @php $i=1; @endphp
                    @foreach ($citas as $row )
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $row->fecha}}</td>
                            <td>{{ $row->hora}}</td>
                            <td>{{ $row->codigo_mascota}}</td>
                            <td>
                                <a href="{{ url('citas', [$row->id])}}" class="btn btn-warning"><i class="fa-solid fa-edit"></i>Editar</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('citas', [$row->id]) }}">
                                        @method("delete")
                                        @csrf
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCitas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal"></label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmClientes" method="POST" action="{{url("citas")}}">
                    @csrf
                    <input type="hidden" id="id">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha de la cita" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="time" id="hora" name="hora" class="form-control" placeholder="Hora"  required>
                    </div>
                    <label>Nombre Cliente</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <select id="codigo_mascota" name="codigo_mascota" class="form-select" required>
                            <option value="" >Mascota</option>
                            @foreach($mascotas as $row) 
                            <option value="{{ $row->codigo_mascota}}">{{ $row->nombre_mascota}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-success"  id="btnGuardar"><i class="fa-solid fa-floppy-disk"></i>  Guardar</button>
                    </div>
                </form>
            </div>
                <div class="modal-footer">
                    <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            
        </div>
    </div>
</div>


@endsection