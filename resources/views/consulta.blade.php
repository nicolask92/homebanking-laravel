@extends('layouts.plantilla')

@section('cuerpo')

<div class="container mt-3">
    <h4>Buscar en BD si existe nombre</h4>
    <form method="POST" action="#" class="form-inline" id="formulario">
        
        <div class="form-group mb-2">
          <input type="password" class="form-control" id="Nombre" placeholder="Ingresar nombre a buscar">
        </div>
        <button type="submit" id="Buscar" class="btn ml-1 btn-primary mb-2">Confirmar Identidad</button>
      </form>
</div>

@endsection

@section('script')

<script
src="https://code.jquery.com/jquery-3.4.1.slim.js"
integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
crossorigin="anonymous">
</script>

        <script>
            $(document).ready(function(){
                $("#Buscar").click( function(){
                    var data = {
                        money: $("#Nombre").val()
                    }
                $.post('consulta', data, function(response){
                    $("#formulario").html(response.view);
                        });
                    });
                }); 
        </script>

@endsection