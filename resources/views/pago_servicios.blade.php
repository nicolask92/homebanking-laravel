@extends('plantilla')

@section('cuerpo')
<div class="container-fluid bg-light ">
  <div class="container">
	  <br>  <br>
  <h1 class="text-left"> Pago de Servicios</h1>
  

  <p class="text-left">Paga todo lo que necesites desde la comodidad de tu casa</p>
  <br>
</div>
</div>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-6">
      <form action="pago_servicio.php" method="POST">
          <label for="formGroupExampleInput"  >Nombre del Servicio</label>
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend" >
                    <label class="input-group-text" for="inputGroupSelect01">Elegir Servicio a Pagar</label>
                  </div>
                  <select class="custom-select" name="servicio" id="inputGroupSelect01">
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
            <input type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" name="id_referencia" placeholder="" required>
          </div>
          <div class="form-group">
                <label class="form-check-label" for="exampleCheck1">Importe</label>
            <input type="text" class="form-control" id="formGroupExampleInput" aria-describedby="emailHelp" name="importe" placeholder="" required>

          </div>
          <button type="submit" class="btn btn-primary mb-2 float-right">Pagar Servicio</button>
</form>
    </div>
    <div class="col">
    
    </div>
  </div>
</div>
@endsection