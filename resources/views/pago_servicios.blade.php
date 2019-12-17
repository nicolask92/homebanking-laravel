@extends('layouts.plantilla',['titulo'=>'Pago de Servicios','descripcion'=>'Paga todo lo que necesites desde la comodidad de tu casa'])

@section('cuerpo')



<div class="container mt-3">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-6" id="formulario">
      <form method="POST" action="#">
          <label for="formGroupExampleInput"  >Nombre del Servicio</label>
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend" >
                    <label class="input-group-text" for="inputGroupSelect01">Elegir Servicio a Pagar</label>
                  </div>
                  <select class="custom-select" name="servicio" id="nameService">
                    <option selected>Seleccion</option>
                    <option value="Luz">Luz</option>
                    <option value="Agua">Agua</option>
                    <option value="Gas">Gas</option>
                    <option value="Telefono, Internet, TV">Telefono, Internet, TV</option>
                    <option value="Tarjeta de Credito">Tarjeta de Credito</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Numero de Referencia</label>
            <input type="text" class="form-control" id="referencia" aria-describedby="emailHelp" name="id_referencia" placeholder="" required>
          </div>
          <div class="form-group">
                <label class="form-check-label" for="exampleCheck1">Importe</label>
            <input type="text" class="form-control" id="moneyService" aria-describedby="emailHelp" name="importe" placeholder="" required>

          </div>
          <button type="button" id="payService" class="btn btn-primary mb-2 float-right">Pagar Servicio</button>
</form>

    </div>
    <div class="col">
    
    </div>
  </div>
</div>

<div class="container mt-5">
  <h4 class="text-left mb-3"> Servicios Pagados</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de Servicio</th>
        <th scope="col">Numero de Ref</th>
        <th scope="col">Importe</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($servicios_pagos as $servicio)
      <tr>
        <th scope="row">{{$servicio->id}}</th>
        <td>{{$servicio->servicio}}</td>
        <td>{{$servicio->reference_number}}</td>
        <td>{{$servicio->importe}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection

@section('script')

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous"></script>

<script>

    $(document).ready(function(){
        $("#payService").click( function(){
            var data = {
                money: $("#moneyService").val(),
                service: $("#nameService").val(),
                referencia: $('#referencia').val()
            }
          $.post('servicios/pay', data, function(response){
              $("#formulario").html(response.view);
                });
            });
        }); 
</script>

@endsection