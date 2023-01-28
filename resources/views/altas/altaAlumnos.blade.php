@extends('layaout.plantilla')
@section('contenido')
<!-- A partir de aqui se mostrara el modulo de alta a los alumnos-->
<div class="recent-orders">
    <h2>Alumnos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CURP</th>
                <th>NSS</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>NOMBRE/S</th>
                <th>SEXO</th>
                <th>TELEFONO</th>
                <th>CORREO ELECTRONICO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20212307</td>
                <td>SCNDCJSDNJCNSD21</td>
                <td>315151231</td>
                <td>Tamay</td>
                <td>Canul</td>
                <td>Francisco Javier</td>
                <td>Masculino</td>
                <td>9881090497</td>
                <td>tcfrancisco852@gmail.com</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>20212299</td>
                <td>S09A0J0DA09DA</td>
                <td>2122212</td>
                <td>Matu</td>
                <td>Miranda</td>
                <td>Oscar Aldair</td>
                <td>Masculino</td>
                <td>9881054669</td>
                <td>oscaraldairmatumiranda@gmail.com</td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>20212299</td>
                <td>S09A0J0DA09DA</td>
                <td>2122212</td>
                <td>Primo</td>
                <td>Miranda</td>
                <td>adsad adada</td>
                <td>Masculino</td>
                <td>09991201312</td>
                <td>atarass@gmail.com</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
@push('scripts')
@endpush