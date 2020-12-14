<!DOCTYPE HTML>

<html>

<head>
    <title>MisCarritos.com</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="static/assets/css/main.css"/>
    <link rel="stylesheet" href="static/assets/css/footer.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('css')
</head>

<body>
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Logo -->
                        <h1><a href="{{ URL::route('index')}}" id="logo">Mis Carritos.com</a></h1>

                        <!-- Nav -->
                        <nav id="nav">
                            <a href="{{ URL::route('nosotros')}}" >Nosotros</a>
                            <a href="{{ URL::route('servicios')}}">Servicios</a>
                            <a href="{{URL::route('adicional')}}">Información Adicional</a>
                            <a href="">Reservas</a>
                        <!--    <a href="">Contactenos</a> -->
                        </nav>

                    </div>
                </div>
            </div>
            @yield('presentacion')
        </section>

        <!-- Features -->
        @yield('content')

        <!-- Footer -->
        <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-4 col-12-medium imp-medium">
                    <h6>Contáctanos</h6>
                    <div>
                        <strong>Direccion:</strong> Carrera 13 N° 65-10 Barrio Chapinero - Bogotá, Colombia.
                    </div>
                    <div>
                        <strong>PBX:</strong>
                        <a>(1) 5461600</a>
                        <br>
                        <strong>Móvil</strong>
                        <a>+57 (318) 6625068</a>
                    </div>
                    <div>
                        <strong>Email:</strong>
                        <a>skillex.gaes@gmail.com</a>
                    </div>
                </div>

                <div class="col-4 col-12-medium imp-medium">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="{{ URL::route('nosotros')}}" >Nosotros</a></li>
                        <li><a href="{{ URL::route('servicios')}}">Servicios</a></li>
                        <li><a href="{{URL::route('adicional')}}">Información Adicional</a></li>
                    <!--    <li><a href="#">Reserva</a></li> -->
                    <!--    <li><a href="#">Contactenos</a></li> -->
                    </ul>
                </div>

                <div class="col-4 col-12-medium imp-medium">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; Skillex. All rights reserved. | Design: RavenDesign
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.3.1.min.js') }}" ></script>
    <script src="{{asset('js/popper.min.js') }}" ></script>

    <!--<script src="static/assets/js/jquery.min.js"></script>-->
    <script src="static/assets/js/browser.min.js"></script>
    <script src="static/assets/js/breakpoints.min.js"></script>
    <script src="static/assets/js/util.js"></script>
    <script src="static/assets/js/main.js"></script>
<script src="{{asset('js/bootstrap.min.js') }}" ></script>
</body>

</html>
