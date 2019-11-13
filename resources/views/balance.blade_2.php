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
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <script type="text/javascript" src="resources/js/bootstrap.js"></script>
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




$saldo_arr=0;


        class Transaccion {
          private $monto;
          private $descripcion;
          private $fecha;
          private $saldo;
          private static $mi_saldo_inicial = 0;

            public function __construct($monto,$descripcion,$fecha) {
              $this->monto = $monto;
              $this->descripcion = $descripcion;
              $this->fecha = $fecha;
              $this->saldo = $this->calcularSaldo($monto);
            }
            public function getValor(){
              return $this->monto;
            }

            public function getSaldo() {
              
              return $this->saldo+$this->monto;
              
            }

            public function calcularSaldo($sal) {
              self::$mi_saldo_inicial = self::$mi_saldo_inicial + self::$sal;
              return self::$mi_saldo_inicial;
            }

            public function ArmarTransaccion(){
              echo "<tr>";
              echo "<th scope='row'>".$this->fecha. "</th>";
              echo "<td>".$this->descripcion . "</td>";
              echo "<td>".$this->monto . "</td>";
              echo "<td>".$this->$mi_saldo_inicial . "</td>";
              echo "</tr>";
                    }
            

        }
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
    $importes =0;
        //Instanciando las transacciones.
     $transaccion = new Transaccion(5000,'Transaccion Entrante',"11/11/2019");
     $transaccion_2 = new Transaccion(-400,'Transaccion Saliente',"8/09/2019");
     $transaccion_3 = new Transaccion(3000,'Salario',"2/10/2019");

        //Imprimiendo las transacciones
        $transaccion->ArmarTransaccion();
        $transaccion_2->ArmarTransaccion();
        $transaccion_3->ArmarTransaccion();


     echo "</tr>";
     ?>
 

     




  </tbody>
</table>
</div>




  </body>
</html>