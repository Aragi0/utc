@extends('nuevo')
@section('contenido')
<div class="col-md-6 offset-md-3">
    <div class="card">
        <div class="card-header bg-dark text-white"> EDITAR SERVICIOS</div>
        <div class="card-body">
        <form id="frmServicios" method="POST" action="{{url("servicios",[$servicio])}}">
    @method('PUT')
    @csrf
<!-- CASILLA DE DATO -->
<div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-ticket"></i></span>
        <input type="text" name="codigo_serv" value="{{ $servicio->codigo_serv }}" class="form-control" maxlength="50" placeholder="CODIGO SERVICIO" required>
        
    </div>
    <!-- FIN DE DATO -->

     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
        <input type="text" name="nombre_serv" value="{{ $servicio->nombre_serv }}"class="form-control" maxlength="50" placeholder="NOMBRE SERVICIO" required>
        
    </div>
    <!-- FIN DE DATO -->
     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
        <input type="number" name="precio_serv" value="{{ $servicio->precio_serv }}"class="form-control" maxlength="50" placeholder="PRECIO DE SERVICIO" required>
        
    </div>
    <!-- FIN DE DATO -->

    <div class="d-grid col-6 mx-auto">
    <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
</div>
        </div>

    </div>

</div>
@endsection