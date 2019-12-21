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
    @foreach ($inversiones as $in)
  <tr>
        <th scope="row">{{$in->empresa}}</th>
        <td >{{$in->total_accion}}</td>
  <td id="valor_{{$in->id}}">{{$in->val_accion}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('inversiones.comprar', $in->id)}}">Comprar</a>
          <a class="btn btn-success" href="{{route('inversiones.vender', $in->id)}}">Vender</a>
        </td>
      </tr>
      @endforeach


  </tbody>
</table>
</div>
  

@endsection



@section('script')

<script src="https://code.jquery.com/jquery-3.4.1.slim.js"
integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
crossorigin="anonymous"></script>

@endsection