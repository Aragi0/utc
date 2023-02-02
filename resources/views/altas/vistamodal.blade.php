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
    <table>
      <thead>
        <th>SKU</th>
        <th>PRODUCTO</th>
        <th>OPERACION</th>
        <th>PRECIO</th>
        <th>CANTIDAD</th>
        <th>TOTAL</th>
      </thead>

      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
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