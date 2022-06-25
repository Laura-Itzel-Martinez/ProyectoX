<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CyberNahualt</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="./librerias/jquery-3.6.0.min.js"></script>
    <script src="./librerias/bostrap4/popper.min.js"></script>
    <script src="./librerias/bostrap4/bootstrap.min.js"></script>
    <script src="./librerias/sweetalert.min.js"></script>
    <script src="./librerias/dataTable/jquery.dataTables.min.js"></script>
    <script src="./librerias/dataTable/dataTables.bootstrap4.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="./public/css/style5.css">
    <link rel="stylesheet" href="./librerias/bostrap4/bootstrap.min.css">
    <link rel="stylesheet" href="./librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="./librerias/dataTable/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Josefin+Sans:wght@300&family=Montserrat:wght@500&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Tangerine:wght@700&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">
    
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top fixed-top navbar-responsive">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="{{asset('img/logo.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                     CyberNahualt
                  </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link"
                                    href="{{ route('login') }}">
                                    <span class="btn btn-primary" data-toggle="modal" href="{{ route('login') }}">
                                        Ingresar
                                    </span>
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" 
                                    href="{{ route('register')}}">
                                        <span class="btn btn-warning" data-toggle="modal" href="{{ route('register') }}">
                                            Registrar
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @else
                                   
                            <li class="nav-item">
                                <a class="nav-link" href="profesores.php"><span span class="fas fa-book" style="color:white"></span>Cursos</a>
                            </li>  

                            <li class="nav-item">
                                <a class="nav-link" href="quienesSomos.php"><span class="fas fa-users" style="color:white"></span>¿Quienes somos?</a>
                            </li>
                
                            <li class="nav-item">
                                <a class="nav-link" href="profesores.php"><span class="fas fa-user-graduate" style="color:white"></span> Profesores</a>
                            </li>
                              
                            <li class="nav-item active dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir de sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</body>
</html>
