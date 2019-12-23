<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <link rel="shortcut icon" type="image/svg+xml" href="{{asset('favicon.ico')}}" sizes="any">
      
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <title> CODERBANK - Homebanking</title>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
              
              
                @isset($record)
                <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
              </ul>

                @endisset
              

				   
				  </div>
        </nav>
        @isset($titulo)
        @isset($descripcion)
        @if(Route::is('inicio'))
            
            <div class="container-fluid bg-light ">
                <div class="container">
                <br>  <br>
                <h1 class="text-center">{{$titulo}}</h1>
              <br>
              
                <p class="text-center">{{$descripcion}}</p>
              <br>
              </div>
              </div>
         @else

          <div class="container-fluid bg-light mt-5">
            <div class="container">
              <div class="row">
                <div class="col-sm-10 ">
                  <h1 class="text-left"> {{$titulo}}</h1>
            
          
                  <p class="text-left">{{$descripcion}}</p>
                  <br>
                </div>
                <div class="col-sm-2">
                  <div id="saldoo" class="alert alert-primary text-right" role="alert">
                    @include('layouts.saldo')
                    
                  </div>
                </div>
              </div>
           

          </div>
          </div>
        @endif
        @endisset
        @endisset


                @yield('cuerpo')


                @yield('script')


  </body>
</html>