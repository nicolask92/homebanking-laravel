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
      <?php
        $servicio = $_POST["servicio"];
        $id_referencia = $_POST['id_referencia'];
        $importe = $_POST["importe"];


        if(empty($servicio)||empty($id_referencia)||empty($importe)){
            $msj = "Debe completar todos los datos necesarios";
        } else {
            $msj = "Gracias por realizar su pago a travez de CODERBANK";
            $msj2 ="El Pago de Servicio de $servicio es de $$importe y se pago correctamente. Su id de referencia es $id_referencia";
        }

      ?>

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
  

  <p class="text-left"></p>
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
            <div class="card">
                <div class="card-header">
                    Pago de Servicio
                </div>
                <div class="card-body">
                    <?php if(empty($msj2)){
                                            echo "<h5 class='card-title'> $msj </h5>";
                    }
                    else {
                    echo "<h5 class='card-title'> $msj </h5>";
                    echo "<p class='card-text'> $msj2 </p>";
}
                    ?>
                    
                    <a href="pago_servicios.html" class="btn btn-primary">Seguir con Otros Pagos</a>
                </div>
        </div>
    </div>


    <div class="col">
    
    </div>
  </div>
</div>
<?php



?>

</body>
</html>