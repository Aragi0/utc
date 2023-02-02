@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div class="recent-orders">
    <h2>Asiganturas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO DE ASIGNATURA</th>
                <th>NOMBRE DE ASIGNATURA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>186456</td>
                <td>Ingles VII</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush