@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark openModal" data-bs-toggle="modal" data-bs-target="#modalClientes">
                <i class="fa-solid fa-circle-plus"></i>  Añadir
            </button>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead><tr><th>#</th><th>DOCUMENTO</th><th>NOMBRE</th><th>TELEFONO</th><th>EMAIL</th><th>EDITAR</th><th>ELIMINAR</th></tr></thead>
                <tbody class="table-group-divider" id="contenido">
                    @php $i=1; @endphp
                    @foreach ($clientes as $row )
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $row->documentoid}}</td>
                            <td>{{ $row->nombre}}</td>
                            <td>{{ $row->telefono}}</td>
                            <td>{{ $row->email}}</td>
                            <td>
                                <a href="{{ url('clientes', [$row->documentoid])}}" class="btn btn-warning"><i class="fa-solid fa-edit"></i>Editar</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('clientes', [$row->documentoid]) }}">
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

<div class="modal fade" id="modalClientes" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal"></label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmClientes" method="POST" action="{{url("clientes")}}">
                    @csrf
                    <input type="hidden" id="documentoid">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-gift"></i></span>
                        <input type="text" id="documentoid" name="documentoid" class="form-control" placeholder="Documento de identidad" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu Nombre"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono"  required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required>
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