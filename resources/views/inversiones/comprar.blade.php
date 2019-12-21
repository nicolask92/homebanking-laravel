@extends('layouts.plantilla')

@section('cuerpo')


@if (isset($error))
        
   
    
<div class="alert alert-danger">
    Complete los datos del formulario
</div>
@else

<div class="container mt-3">
    <div class="row">
      <div class="col-2">
        
      </div>
      <div class="col-8" id="formulario">
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Estas por invertir en {{ $invertir->empresa }}</h4>
        <p>Las acciones que tenes de <strong>{{$invertir->empresa}}</strong> son <strong>{{$invertir->total_accion}}</strong> y el precio por cada una de ella es de <strong>${{$invertir->val_accion}}</strong></p>
            <hr>
            <p class="mb-0">¿Cuantas acciones desea comprar?</p>
        <form class="form-inline" action="#" method="POST">
            <div class="form-group mt-2 mr-2">
                <input type="number" class="form-control" id="acciones" placeholder="Acciones a comprar">
            </div>
              <button type="button" id="comprar" class="btn btn-primary mt-2">Comprar</button>
        </div>
        </form>
      </div>
      <div class="col-2">
        
    </div>
  </div>
</div>

@endif
@endsection

@section('script')

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.js"
  integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
  crossorigin="anonymous">
</script>

<script>

    $(document).ready(function(){
        $("#comprar").click( function(){
            var data = {
                acciones: $("#acciones").val(),
                id: {{$invertir->id}}
            }
          $.post('comprado', data, function(response){
              $("#formulario").html(response.view);
                });
            });
        }); 
</script>

@endsection