@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div class="recent-orders">
    <h2>Matriculas de Alumnos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>MATRICULA</th>
                <th>CURP</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE/S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>20212307</td>
                <td>SCNDCJSDNJCNSD21</td>
                <td>Tamay</td>
                <td>Canul</td>
                <td>Francisco Javier</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush