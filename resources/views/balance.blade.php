@extends('plantilla')

@section('cuerpo')
  


<div class="container-fluid bg-light ">
  <div class="container">
	  <br>  <br>
  <h1 class="text-left"> Balance Financiero</h1>
  

  <p class="text-left">Aca podes controlar los movimientos de tu cuenta</p>
  <br>
</div>
</div>

<br>

<div class="container table-responsive-md">
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
   
    @for ($i = 0; $i < count($monto); $i++)

    <tr>
      <th scope='row'>{{$fecha[$i]}} </th>
      <td>{{$descripcion[$i]}}</td>
      <td>{{$monto[$i]}}</td>
      <td>{{$saldos[$i]}}</td>
      </tr>


    @endfor
    
  </tbody>
</table>
</div>

@endsection

  </body>
</html>