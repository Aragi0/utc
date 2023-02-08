@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div id="carreras">
<div class="recent-orders">
    <h2>Carrera</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO DE CARRERA</th>
                <th>NOMBRE DE LA CARRERA</th>
                <th>PLAN DE ESTUDIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="run in carreras">
                <td>@{{run.id}}</td>
                <td>@{{run.codigo_carrera}}</td>
                <td>@{{run.nombre_carrera}}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<!-- Aqui termina VUE -->

@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('js/jsAltas/altaCarrera.js')}}"></script>
@endpush