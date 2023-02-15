<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
</head>
<body>
    <h3>HOLA BANDA</h3>
    <div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="d-grid mx-auto">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCarreras">
                <i class="fa-solid fa-circle-plus"></i> Añadir
            </button>
        </div>
    </div>
    </div>
    <!-- aqui es en donde termina el boton para abrir el modal de carreras -->

    <div class="row mt-3">
        <div class="col-12 col-lg-8 offset-0 offset-lg-2">
            <div class="table">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CODIGO</th>
                        <th>NOMBRE CARRERA</th>
                        <th>PLAN ESTUDIO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php $i=1; @endphp
                    @foreach($carreras as $run)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$run->codigo_carrera}}</td>
                        <td>{{$run->nombre_carrera}}</td>
                        <td>{{$run->id_plan}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-3">
                            <a href="{{ url('carreras',[$run]) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                            </a>
                                </div>
                            <!-- boton de editar -->

                            <div class="col-md-3">
                            <form method="POST" action="{{ url('carreras',[$run] )}}">
                                @method("delete")
                                @csrf
                                <button class="btn btn-danger"> <i class="fa-solid fa-trash"></i></button>
                            </form>
                            </div>
                            <!-- boton de eliminar -->
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Aqui es en donde termina la tabla de las carreras -->
    <!-- Aqui empieza la ventana modal  -->
    <!-- Modal -->
<div class="modal fade" id="modalCarreras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar una carrera</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form id="frmCarreras" method="POST" action="{{ url('carreras') }}">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">
            <i class="fa-solid fa-graduation-cap"></i>
            </span>
            <input type="number" name="codigo_carrera" class="form-control" maxlength="50" placeholder="Codigo de la Carrera" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
            <i class="fa-solid fa-graduation-cap"></i>
            </span>
            <input type="text" name="nombre_carrera" class="form-control" maxlength="120" placeholder="Nombre de la Carrera" required>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text">
            <i class="fa-solid fa-graduation-cap"></i>
            </span>
            <input type="1" name="id_plan" class="form-control" maxlength="50" placeholder="Id del Plan de Estudio" required>
        </div>

        <div class="d-gid col-6 mx-auto">
        <button class="btn btn-success">
        <i class="fa-solid fa-floppy-disk"></i> Guardar
        </button>
        <!-- boton de guardar -->
        </div>
        </form>
        <!-- final del formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    <!-- Aqui termina la ventana modal -->
</body>

</html>