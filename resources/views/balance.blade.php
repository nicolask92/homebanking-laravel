@extends('layouts.plantilla',['titulo'=>'Balance Financiero','descripcion'=>'Aca podes controlar los movimientos de tu cuenta'])

@section('cuerpo')
  

<div class="container table-responsive-md mt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Importe</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach ($balance as $item)
        
       <tr>
      <th scope='row'>{{$item->fecha}} </th>
      <td>{{$item->descr}}</td>
      <td>{{$item->importe}}</td>
      <td>{{$item->saldos}}</td>
      </tr>

      @endforeach

    
  </tbody>
</table>
</div>

@endsection