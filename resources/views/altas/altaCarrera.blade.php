@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div class="recent-orders">
    <h2>Carrera</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO DE CARRERA</th>
                <th>NOMBRE DE LA CARRERA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>17816</td>
                <td>Ingenieria en Desarrollo de Software</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush