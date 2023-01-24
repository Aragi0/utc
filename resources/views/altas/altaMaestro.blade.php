@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta de maestros-->

<div class="recent-orders">
    <h2>Tabla de Alumnos</h2>
    <table>
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>TELEFONO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>62626</td>
                <td>Francisco Javier</td>
                <td>Tamay Canul</td>
                <td>9881090497</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush