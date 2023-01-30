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
        <h2>Titulo de contenido</h2>
        <!--Aca ponene el contenido de la ventana modal si ven que no se ve vien el contenido a visen para que revise pueda que tenga que de
        declara unas cosas mas para que el contenido que esten poniendo funcione veien-->
        <p>este es un ejemplo de contenido, la ventana se deve de adaptar a el tipo de contenido que pongan
            amenos que le ayan puesto propiedades al contenido y estas seam muy grandes</p>
        <!--despues de el contenido sige los botones este es el ejemplo de el botton de cerrar-->
        <div class="btn-cerrar">
            <label for="btn-modal">Cerrar</label>
        </div>
        <!--no pongan contenido fuera de este div puesto que las propiedades se apliacin adentro-->
    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
</div>

@endsection
@push('scripts')
@endpush