@extends('plantilla')
@section('contenido')

{{-------------------------------- FullCalendario ----------------------------------------------------}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">Full Calendar in Laravel 9 wich javascript</h2>
            <div class="col-md-11 offset-1 mt-5 mb-5">
                <div id='calendar' class="calendar" ></div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
    <div class="container">
        <button type="button" class="btn btn-primary bg-dark" data-bs-toggle="modal" data-bs-target="#myEvento">
            Launch demo modal
          </button>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
                <div class="form-group">
                  <label for="">Mascota</label>
                  <select class="form-control" name="codigo_mascota" id="codigo_mascota" class="form-select" required>
                    <option value="">-- Mascota --</option>
                    <option value="Pelusa">Pelusa</option>
                    <option value="Winny">Winny</option>
                    <option value="Pupca">Pupca</option>
                    <option value="Luine">Luine</option>
                    <option value="Cassia">Cassia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Fecha Cita</label>
                  <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha de la cita">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="">Hora</label>
                  <input type="time" class="form-control" name="hora" id="hora" aria-describedby="helpId" placeholder="Hora de la cita">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
{{------------------------------Grafica de  Fechas--------------- --}}
{{------------------------------tablero de Control--------------- --}}

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">Grafica de fechas</h2>
            <div class="col-md-11 offset-1 mt-5 mb-5">
                <div class="calendar">
                    <canvas id="citas" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</div> 



@endsection