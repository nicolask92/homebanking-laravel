<body>

    @if (isset($error))
        
   
    
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @else
        
    

    <div class="alert alert-success" role="alert">
        <h2 class="text-center">Servicio Pagado</h2>
            <strong>Servicio:</strong> {{$service}} <br>
            <strong>Importe:</strong> {{$money}}<br>
            <strong>Referencia:</strong>  {{$referencia}}<br>

    </div>

    @endif

</body>