<body>

    @if (isset($error))
        
   
    
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @else
        
    

    <div class="alert alert-warning" role="alert">
        <h2 class="text-center">Acciones Vendidas</h2>
            <strong>Empresa:</strong> {{$empresa}} <br>
            <strong>Importe Recuperado:</strong> {{ number_format($acciones_a_vender)}}<br>
            <strong>Acciones Vendidas:</strong>  {{$accion}}<br>
            <hr>
            <p class="mb-0">El saldo Actual es de : <strong>${{ number_format($saldo->last()->saldo)  }}</strong></p>

    </div>

    @endif

</body>