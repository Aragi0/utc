@extends('nuevo')
@section('contenido')
<div class= "row mt-3">
    <div class="col-md-4 offset-md-4">
    <div class="d-grid mx-auto">
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalPago">
<i class="fa-solid fa-circle-plus"></i>        AÑADIR PAGO
        </button>
 
    </div>
    </div>
</div>
<!-- EMPIEZA LA TABLA -->

<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="bg-secondary text-white text-center">
                <tr>
                    
        <th scope="col"class="text-center">SERVICIO</th>
        <th scope="col"class="text-center">MATRICULA</th>
        <th scope="col"class="text-center">ESTADO DEL SERVICIO</th>
        <th scope="col"class="text-center">ACCIONES</th>
    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($registro_pagos as $row)
                    <tr>
                        
                        <td>{{ $row->nombre_serv }}</td>
                        <td>{{ $row->id_matricula}}</td>
                        <td>{{ $row->estado }}</td>
                
                        <td>

        <a href="{{ url('registrop', [$row]) }}" class="btn bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>

           <form method="POST" action="{{ url('registrop', [$row]) }}">
            @method("delete")
            @csrf
            <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button>

           </form>
                        </td>
                    </tr>

                    @endforeach()
                </tbody>
            </table>
</div>
</div>
</div>

<!-- EMPIEZA VENTANA MODAL -->
<div class="modal fade" id="modalPago" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header bg-secondary">
        <label class="h5" id="titulo_modal">AÑADIR UN PAGO</label>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
</div>
<div class="modal-body">
    <!-- IMPORTANTE EN ESA URL VA COMO NOMBRASTE EL CONTROLADOR EN WEB -->
    <form id="frmServicios" method="POST" action="{{url("registrop")}}">
    @csrf
    <!-- CASILLA DE DATO -->
    <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-ticket"></i></span>
        <select  name="id_servicio" class="form-select" required>
            <option value="">SELECCIONA EL SERVICIO</option>
                @foreach($servicios as $row)
                <option value="{{$row->id}}">{{$row->nombre_serv}}</option>
                @endforeach

        </select>
    </div>
    <!-- FIN DE DATO -->

     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
        <input type="text" name="id_matricula" class="form-control" maxlength="50" placeholder="SELECIONA LA MATRICULA" required>
        
    </div>
    <!-- FIN DE DATO -->
     <!-- CASILLA DE DATO -->
     <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
        <input type="text" name="estado" class="form-control" maxlength="50" placeholder="ESTATO DEL PAGO" required>
        
    </div>
    <!-- FIN DE DATO -->
 
   
<div class="d-grid col-6 mx-auto">
    <button class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
</div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" id="btnCerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

</div>
</div>

    </div>

</div>

<!-- fIN MODAL -->
@endsection