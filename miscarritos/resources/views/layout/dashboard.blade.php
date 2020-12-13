<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>miscarritos.com</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/favicon.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          @auth
          <ul class="navbar-nav">
             @if (Auth::user()->role->descripcion == 'mecanico') 
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('vehiculos')}}">
                <i class="ni ni-delivery-fast text-orange"></i>
                <span class="nav-link-text">Vehículos</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('taller')}}">
                <i class="ni ni-settings text-default"></i>
                <span class="nav-link-text">Taller</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('index')}}">
                <i class="ni ni-shop text-info"></i>
                <span class="nav-link-text">Regresar al Home</span>
              </a>
            </li>
            @endif

            @if (Auth::user()->role->descripcion == 'administrador') 
            <li class="nav-item">
              <a class="nav-link active" href="{{ URL::route('usuarios')}}">
                <i class="ni ni-circle-08 text-blue"></i>
                <span class="nav-link-text">Usuarios</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('alquiler')}}">
                <i class="ni ni-calendar-grid-58 text-primary"></i>
                <span class="nav-link-text">Alquiler</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('reserva')}}">
                <i class="ni ni-glasses-2 text-red"></i>
                <span class="nav-link-text">Reserva</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('vehiculos')}}">
                <i class="ni ni-delivery-fast text-orange"></i>
                <span class="nav-link-text">Vehículos</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('taller')}}">
                <i class="ni ni-settings text-default"></i>
                <span class="nav-link-text">Taller</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::route('index')}}">
                <i class="ni ni-shop text-info"></i>
                <span class="nav-link-text">Regresar al Home</span>
              </a>
            </li>
            @endif
          </ul>
          @endauth
          <!-- Divider -->
          <hr class="my-3">
         
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="assets/img/brand/favicon.png">
              </span>
              @guest
                @if (Route::has('login'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                @endif
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
               @endif
               @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
              @endguest
            </li>  
          </ul>
        </div>
      </div>
    </nav>
    <div class="dropdown-divider"></div>
    <!-- Table --- Page content --> 
    @yield('content')
    <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
            &copy; 2020 <a href="{{ URL::route('index')}}" class="font-weight-bold ml-1" target="_blank">ADSI</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
