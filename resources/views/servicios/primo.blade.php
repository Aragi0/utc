@extends('layaout.plantilla')
@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- EXPORTAR EXEL -->
@endsection

@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div class="recent-orders">
    <h2>Pagos</h2>
    <button data-bs-toggle="modal" data-bs-target="#modalServicios">
        AÑADIR
    </button>
    <table id="example23">
        <thead>
            <tr>
                <th>CODIGO DEL SERVICIO</th>
                <th>NOMBRE DEL SERVICIO</th>
                <th>PRECIO DEL SERVICIO "MX"</th>
                <th>EDIAT</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $row)
            <tr>
                <td>{{ $row->codigo_serv }}</td>
                <td>{{ $row->nombre_serv }}</td>
                <td>{{ $row->precio_serv }}</td>
                <td>
                    <a href="{{ url('servicios', [$row]) }}">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </a>
                </td>
                <td class="text-center  fw-bold fs-6">
                    <form method="POST" action="{{ url('servicios', [$row]) }}">
                        @method("delete")
                        @csrf
                        <button class="btn btn-danger">
                            <span class="material-icons-sharp">
                                delete
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
</div><!-- esta porqueria xd -->

<!-- EMPIEZA VENTANA MODAL -->
<div class="modal fade" id="modalServicios" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label class="h5" id="titulo_modal">AÑADIR UN SERVICIO</label>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form id="frmServicios" method="POST" action="{{url("servicios")}}">
                    @csrf
                    <!-- CASILLA DE DATO -->
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-ticket"></i></span>
                        <input type="text" name="codigo_serv" class="form-control" maxlength="50" placeholder="CODIGO SERVICIO" required>
                    </div>
                    <!-- FIN DE DATO -->
                    <!-- CASILLA DE DATO -->
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <input type="text" name="nombre_serv" class="form-control" maxlength="50" placeholder="NOMBRE SERVICIO" required>
                    </div>
                    <!-- FIN DE DATO -->
                    <!-- CASILLA DE DATO -->
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                        <input type="number" name="precio_serv" class="form-control" maxlength="50" placeholder="PRECIO DE SERVICIO" required>
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
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.18/dist/sweetalert2.all.min.js"></script>
<!-- Para usar los botones -->
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<!-- SELECT 2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
<!-- Para los estilos en Excel -->
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.1.1/js/buttons.html5.styles.templates.min.js"></script>
<script src="js/datatable.js"></script>
@endpush