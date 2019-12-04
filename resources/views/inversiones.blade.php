@extends('layouts.plantilla',['titulo'=>'Inversiones','descripcion'=>'Duplica tus ahorros en el mercado financiero.'])

@section('cuerpo')

<div class="container table-responsive-lg mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Empresa</th>
      <th scope="col">Acciones</th>
      <th scope="col">Valor de Accion</th>
      <th scope="col">Compra-Venta de Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Arcos Dorados</th>
      <td>1000</td>
      <td>100</td>
      <td><button type="button" class="btn btn-primary">Comprar</button>
      <button type="button" class="btn btn-success">Vender</button>
      </td>
    </tr>

  </tbody>
</table>
</div>

@endsection