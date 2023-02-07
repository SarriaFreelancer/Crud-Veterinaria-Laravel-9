@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark openModal" data-bs-toggle="modal" data-bs-target="#modalMascotas">
                <i class="fa-solid fa-circle-plus"></i>  Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead><tr><th>#</th><th>CÓDIGO MASCOTA</th><th>NOMBRE</th><th>TIPO</th><th>CC CLIENTE</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                <tbody class="table-group-divider" id="contenido">
                    @php $i=1; @endphp
                    @foreach ($mascotas as $row )
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $row->codigo_mascota}}</td>
                            <td>{{ $row->nombre_mascota}}</td>
                            <td>{{ $row->tipo_mascota}}</td>
                            <td>{{ $row->documentoid}}</td>
                            <td>
                                <a href="{{ url('mascotas', [$row->codigo_mascota])}}" class="btn btn-warning"><i class="fa-solid fa-edit"></i>Editar</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('mascotas', [$row->codigo_mascota]) }}">
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

<div class="modal fade" id="modalMascotas" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal"></label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmMascotas" method="POST" action="{{url("mascotas")}}">
                    @csrf
                    <input type="hidden" id="codigo_mascota">
                    <label>Código para Mascota</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="text" id="codigo_mascota" name="codigo_mascota" class="form-control" placeholder="Código de Mascota" required>
                    </div>
                    <label>Nombre Mascota</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="nombre_mascota" name="nombre_mascota" class="form-control" placeholder="Nombre de la Mascota"  required>
                    </div>
                    <label>Tipo de Mascota</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <select id="tipo_mascota" name="tipo_mascota" class="form-select" required>
                            <option value="" >-- Mascota --</option>
                            <option value="Perro" >Perro</option>
                            <option value="Gato" >Gato</option>
                            <option value="Conejo" >Conejo</option>
                            <option value="Caballo" >Caballo</option>
                        </select>
                    </div>
                    <label>Nombre Cliente</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <select id="documentoid" name="documentoid" class="form-select" required>
                            <option value="" >Cliente</option>
                            @foreach($clientes as $row) 
                            <option value="{{ $row->documentoid}}">{{ $row->nombre}}</option>
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