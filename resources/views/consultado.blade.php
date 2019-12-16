@extends('layouts.plantilla')

@section('cuerpo')

    <div class="alert alert-success" role="alert">
        <h2 class="text-center">Nombres Encontrados</h2>
        @foreach ($names as $name)
        <strong>Nombre:</strong> {{$name}} <br>
        @endforeach
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