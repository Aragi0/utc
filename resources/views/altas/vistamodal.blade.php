@extends('layaout.plantilla')
@section('contenido')
<!--copean too y lo ponen donde lo quieran usar-->
<!--este bottom lo ponen donde quieren que se abra la ventana-->
<div class="boton-modal">
    <label for="btn-modal"><!--el contenido (Abrir modal)es relatvo y pueden cambirlo por cualqier cosa --> Abrir Modal </label>
</div>
<!--Fin de Boton-->
<!--Ventana Modal-->
<input type="checkbox" id="btn-modal" />
<div class="container-modal">
    <div class="content-modal">
        <h2>Titulo</h2>
        <div class="tabla-modal">
        </div>
        <p>adhiuasd uweguhijd n annid amudnasmaubdsunasdmashbd nasdnas dasnda sddad amudnasmaubdsunasdmashbd nasdnas dasnda sddad amudnasmaubdsunasdmashbd
            nasdnas dasnda sddad amudnasmaubdsunasdmashbd nasdnas dasnda sddad amudnasmaubdsunasdmashbd nasdnas dasnda sddad amudnasmaubdsunasdmashbd nasdnas
            dasnda sdda</p>
        <div class="btn-cerrar">
            <label for="btn-modal">Cerrar</label>
        </div>
    </div>
    <!--no pongan contenido fuera de este div puesto que las propiedades se apliacin adentro-->
    <label for="btn-modal" class="cerrar-modal"></label>
</div>

@endsection
@push('scripts')
@endpush