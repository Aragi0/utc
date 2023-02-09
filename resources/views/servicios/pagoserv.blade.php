@extends('nuevo')
@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- EXPORTAR EXEL -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
<!-- SELECT 2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">



@endsection
@section('contenido')
<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalPago">
                <i class="fa-solid fa-circle-plus"></i> AÑADIR PAGO
            </button>

        </div>
    </div>
</div>
<!-- EMPIEZA LA TABLA -->

<div class="row mt-3">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <div class="table-responsive">
            <table id="example230" class="table table-striped table-striped mt-4 table-bordered alert alert-secondary">
                <thead class="bg-secondary text-white text-center">
                    <tr>

                        <th scope="col" class="text-center">SERVICIO</th>
                        <th scope="col" class="text-center">MATRICULA</th>
                        <th scope="col" class="text-center">FECHA DE PAGO SERVICIO</th>
                        <th scope="col" class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($registro_pagos as $row)
                    <tr>

                        <td class="text-center  fw-bold fs-6">{{ $row->nombre_serv }}</td>
                        <td class="text-center  fw-bold fs-6">{{ $row->id_matricula}}</td>
                        <td class="text-center  fw-bold fs-6">{{ $row->estado }}</td>


                        <td class="text-center" style="width:100%">

                            <a href="{{ url('registrop', [$row]) }}" class="btn bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></a>

                            <form method="POST" action="{{ url('registrop', [$row]) }}">
                                @method("delete")
                                @csrf
                                <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg></button>

                            </form>
                        </td>
                    </tr>

                    @endforeach()
                </tbody>
            </table>
            @section('js')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
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

            <script>
                //  EMPIEZA DATATABLES
                $(document).ready(function() {
                    var table = $('#example230').DataTable({
                        orderCellsTop: true,
                        fixedHeader: true,
                        dom: "Bfrtip",
                        buttons: {
                            dom: {
                                button: {
                                    className: 'btn'
                                }
                            },
                            buttons: [{
                                //definimos estilos del boton de excel
                                extend: "excel",
                                text: 'EXPORTAR LISTA DE LIBROS A EXCEL',
                                className: 'btn btn-outline-success',

                                // 1 - ejemplo básico - uso de templates pre-definidos
                                //definimos los parametros al exportar a excel

                                excelStyles: {
                                    //template: "header_blue",  // Apply the 'header_blue' template part (white font on a blue background in the header/footer)
                                    //template:"green_medium" 

                                    "template": [
                                        "blue_medium",
                                        "header_green",
                                        "title_medium"
                                    ]

                                },
                            }]
                        },
                        "destroy": true,
                        "language": {
                            "lengthMenu": "Mostrar _MENU_ Registro por Pagina",
                            "zeroRecords": " No se encontro el Registro Disculpe",
                            "info": "Mostrando la Pagina _PAGE_ de _PAGES_",
                            "infoEmpty": "No records available",
                            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                            'search': "BUSCAR UN LIBRO",
                            'paginate': {
                                'next': 'Siguiente',
                                'previous': 'Anterior',
                            }
                        }


                    });

                    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
                    $('#example230 thead tr').clone(true).appendTo('#example230 thead');

                    $('#example230 thead tr:eq(1) th').each(function(i) {
                        var title = $(this).text(); //es el nombre de la columna
                        $(this).html('<input class="text-center" type="text" placeholder="FILTRAR REGISTRO" />');

                        $('input', this).on('keyup change', function() {
                            if (table.column(i).search() !== this.value) {
                                table
                                    .column(i)
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                });

                //  TERMINA DATATABLES
            </script>
            @endsection()
        </div>
    </div>
</div>

<!-- EMPIEZA VENTANA MODAL -->
<div class="modal fade" id="modalPago" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
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
                        <select name="id_servicio" class="form-select" required>
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
                        <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                        <input type="date" name="estado" class="form-control" maxlength="50" placeholder="ESTATO DEL PAGO" required>

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