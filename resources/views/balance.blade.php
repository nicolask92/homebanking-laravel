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
              <li class="nav-item active">
                <a class="nav-link" href="balance.html">Balance</a>
              </li>
              <li class="nav-item">
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
  <h1 class="text-left"> Balance Financiero</h1>
  

  <p class="text-left">Aca podes controlar los movimientos de tu cuenta</p>
  <br>
</div>
</div>

<br>

<?php
$transacciones = [
  0 => [ "fecha" => "1/02/2019",
  "valor" => "500", "descripcion" => "Salario"],
  1 => [ "fecha" => "15/03/2019",
  "valor" => "2000", "descripcion" => "Salario"],
  2 => [ "fecha" => "1/04/2019",
  "valor" => "-1412", "descripcion" => "Transferencia Saliente"],
  3 => [ "fecha" => "24/05/2019",
  "valor" => "1231", "descripcion" => "Transferencia Entrante"],
  4 => [ "fecha" => "31/05/2019",
  "valor" => "1513", "descripcion" => "Salario"],
  5 => [ "fecha" => "12/06/2019",
  "valor" => "15123", "descripcion" => "Transferencia Entrante"],
  6 => [ "fecha" => "7/07/2019",
  "valor" => "233", "descripcion" => "Salario"],
  7 => [ "fecha" => "9/10/2019",
  "valor" => "200", "descripcion" => "Transferencia Entrante"],
  8 => [ "fecha" => "12/11/2019",
  "valor" => "500", "descripcion" => "Salario"],
  9 => [ "fecha" => "13/15/2019",
  "valor" => "589", "descripcion" => "Transferencia Entrante"],
  10 => [ "fecha" => "14/16/2019",
  "valor" => "900", "descripcion" => "Salario"]];


?>




<div class="container table-responsive-md">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Importe</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
   
    
    <?php 
            $saldo = 0;
    foreach($transacciones as $indice => $array_fecha_valor) {
        echo "<tr>";

    if($indice != 0 && $indice!= 10){
      $saldo = $saldo+$array_fecha_valor["valor"];
      echo "<th scope='row'>".$array_fecha_valor["fecha"]. "</th>";
      echo "<td>". $array_fecha_valor["descripcion"]. "</td>";
      echo "<td>". $array_fecha_valor["valor"]. "</td>";
      echo "<td>". $saldo. "</td>";
      }
  

     }
     echo "</tr>";
     ?>
 

  </tbody>
</table>
</div>




  </body>
</html>