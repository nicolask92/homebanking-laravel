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
              <li class="nav-item {{ Route::is('inicio') ? 'active' : "" }}">
                <a class="nav-link" href="{{    route('inicio')     }}">Inicio</a>
                </li>
              <li class="nav-item {{ Route::is('balance') ? 'active' : "" }}">
                <a class="nav-link" href="{{    route('balance')     }}">Balance</a>
              </li>
              <li class="nav-item {{ Route::is('servicios') ? 'active' : "" }}">
                <a class="nav-link" href="{{    route('servicios')     }}">Pago de Servicios</a>
              </li>             
              <li class="nav-item {{ Route::is('inversiones') ? 'active' : "" }}">
                <a class="nav-link" href="{{    route('inversiones')     }}">Inversiones</a>
				      </li>			
				    </ul>
				  </div>
				</nav>

                @yield('cuerpo')


  </body>
</html>