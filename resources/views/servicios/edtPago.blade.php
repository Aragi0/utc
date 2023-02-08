@extends('nuevo')
@section('contenido')
<div class="col-md-6 offset-md-3">
    <div class="card">
        <div class="card-header bg-dark text-white"> EDITAR PAGOS</div>
        <div class="card-body">
        <form id="frmServicios" method="POST" action="{{url("registrop",[$registro_pago])}}">
        @csrf
    @method('PUT')
    <!-- CASILLA DE DATO -->
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-ticket"></i></span>
        <select  name="id_servicio"  class="form-select" required>
            <option value="">SELECCIONA EL SERVICIO</option>
             @foreach($servicios as $row)
                @if ($row->id == $registro_pago->id_servicio)
                         <option selected value="{{$row->id}}">{{$row->nombre_serv}}</option>
                @else
                         <option value="{{$row->id}}">{{$row->nombre_serv}}</option>
                @endif
                @endforeach

        </select>
    </div>
    <!-- FIN DE DATO -->

     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
        <input type="text" name="id_matricula" value="{{ $registro_pago->id_matricula }}" class="form-control" maxlength="50" placeholder="SELECIONA LA MATRICULA" required>
        
    </div>
    <!-- FIN DE DATO -->
     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
        <input type="text" name="estado"  value="{{ $registro_pago->estado }}"class="form-control" maxlength="50" placeholder="ESTATO DEL PAGO" required>
        
    </div>
    <!-- FIN DE DATO -->

    <div class="d-grid col-6 mx-auto">
    <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
</div>
        </div>

    </div>

</div>
@endsection