@extends('plantilla')

@section('cuerpo')
<div class="container-fluid bg-light ">
  <div class="container">
  <br>  <br>
<h1 class="text-center"> Bienvenido a CODEBANK, Que queres hacer hoy?</h1>
<br>

<p class="text-center">En este sitio podes operar con tu cuenta mirando el balance, haciendo transferencia, pagando servicios y armando inversiones!</p>
<br>
</div>
</div>

<br>
<br>
    <div class="container">
        <div class="card-deck text-center">
                <div class="card mb-4 text-center">
                  <br>
                      <div class="col-sm text-center">
                          <img src="imagenes/balance.ico" class="img-fluid w-75" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Balance</h5>
                        <p class="card-text">Ingresos Y Egresos</p>
                        <br>
                            <a href="{{    route('balance')     }}" class="btn btn-primary">Ver Situacion Economica</a>
                  </div>
                </div>
                <div class="card mb-4 text-center">
                  <br>
                        <div class="col-sm text-center">
                          <img src="imagenes/servicios.png" class="img-fluid w-75" alt="...">
                        </div>
                    <div class="card-body">
                    <h5 class="card-title">Pago de Servicios</h5>
                    <p class="card-text">Paga tu Deudas y Servicios.</p>
                    <br>
                        <a href="{{    route('servicios')     }}" class="btn btn-primary">Pagar Servicios</a>
                  </div>
                </div>
                <div class="card mb-4 text-center">
                  <br>
                          <div class="col-sm text-center">
                            <img src="imagenes/inversiones.jpg" class="img-fluid w-75" alt="...">
                          </div>
                    <div class="card-body">
                    <h5 class="card-title">Inversiones</h5>
                    <p class="card-text">Duplica tus ahorros en el mercado financiero.</p>
                        <a href="{{    route('inversiones')     }}" class="btn btn-primary">Invertir</a>
                  </div>
                </div>
        </div>
    </div>
@endsection