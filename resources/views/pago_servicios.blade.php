<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/balance.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../public/resources/css/bootstrap.css">
    <script type="text/javascript" src="../public/resources/js/bootstrap.js"></script>
    <title>Homebanking</title>
  </head>
  <body>
  				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="#">CODERBANK</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="balance.html">Balance</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="pago_servicios.html">Pago de Servicios</a>
              </li>             
              <li class="nav-item">
                <a class="nav-link" href="inversiones.html">Inversiones</a>
				      </li>			
				    </ul>
				  </div>
				</nav>

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



  </body>
</html>