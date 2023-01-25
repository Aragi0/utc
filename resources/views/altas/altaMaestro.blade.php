@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta de maestros-->

<div class="recent-orders">
    <h2>Maestros</h2>
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
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>626131</td>
                <td>Oscar Aldair</td>
                <td>Matu Miranda</td>
                <td>9881090237</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>62626</td>
                <td>David Asael</td>
                <td>Tamay Canul</td>
                <td>913123197</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>12323</td>
                <td>Hector Eduardo</td>
                <td>Ortiz can</td>
                <td>9292739192</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush