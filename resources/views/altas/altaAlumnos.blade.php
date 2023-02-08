@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div id="alumnos">
 <div class="recent-orders">
    <h2>@{{mensaje}}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CURP</th>
                <th>NSS</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE/S</th>
               
                <th>TELEFONO</th>
                <th>CORREO ELECTRONICO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="alumnos in alumnos">
                <td>@{{alumnos.id}}</td>
                <td>@{{alumnos.curp}}</td>
                <td>@{{alumnos.num_seguro}}</td>
                <td>@{{alumnos.apellido_paterno}}</td>
                <td>@{{alumnos.apellido_materno}}</td>
                <td>@{{alumnos.nombres}}</td>
                
                <td>@{{alumnos.telefono}}</td>
                <td>@{{alumnos.correo}}</td>
                <td>
                 <button class="btn btn-sm">
                    <i class="fas fa-pen-square"></i>
                 </button>

                 <button class="btn btn-sm">
                    <i class="fas fa-backspace"></i>
                 </button>
                </td>
            </tr>
        </tbody>
    </table>
 </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('js/apis/Alumnos.js')}}"></script>
@endpush