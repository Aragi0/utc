<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h5>AQUI ES EN DONDE PINCHES SE EDITA LA CARRERA</h5>

    <div class="row mt-3">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    EDITAR CARRERA
                </div>

                <div class="card-body">
                    <form id="frmCarrera" method="POST" action="{{ url('carreras',[$carrera] )}}">
                        @method('PUT')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                            <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="number" name="codigo_carrera" class="form-control" value="{{ $carrera->codigo_carrera}}" maxlength="50" placeholder="Código de la carrera">
                            <!-- lo que se tiene puesto en el value la variable $carrera es nuestro objeto y codigo carrera
                                es del valor de la columna que se tiene en la tabla teniendo en cuenta que nos referimos al 
                                name del imput -->
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">
                            <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="text" name="nombre_carrera" class="form-control" value="{{ $carrera->nombre_carrera}}" maxlength="120" placeholder="Nombre de la carrera">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">
                            <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="number" name="id_plan" class="form-control" value="{{ $carrera->id_plan}}" maxlength="50" placeholder="Plan de estudio">
                        </div>

                        <div class="d-gid col-6 mx-auto">
                            <button class="btn btn-success">
                            <i class="fa-solid fa-floppy-disk"></i> Guardar
                            </button>
                        <!-- boton de guardar -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>