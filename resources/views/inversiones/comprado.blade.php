<body>

    @if (isset($error))
        
   
    
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @else
        
    

    <div class="alert alert-success" role="alert">
        <h2 class="text-center">Acciones Compradas</h2>
            <strong>Empresa:</strong> {{$empresa}} <br>
            <strong>Importe gastado:</strong> {{number_format($acciones_a_comprar)}}<br>
            <strong>Acciones compradas:</strong>  {{$accion}}<br>
            <hr>
            <p class="mb-0">El saldo Actual es de : <strong>${{ number_format($saldo->last()->saldo)  }}</strong></p>

    </div>

    @endif

</body>