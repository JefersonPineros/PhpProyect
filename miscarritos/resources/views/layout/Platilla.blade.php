<!DOCTYPE HTML>

<html>

<head>
    <title>MisCarritos.com</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="static/assets/css/main.css"/>
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
                            <a href="#">Reserva</a>
                            <a href="">Contactenos</a>
                        </nav>

                    </div>
                </div>
            </div>
            @yield('presentacion')
        </section>

        <!-- Features -->
        @yield('content')

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-12-medium">

                        <!-- Links -->
                        <section>
                            <h2>Siguenos</h2>
                            <div>
                                <div class="row">
                                    <div class="col-4 col-12-medium imp-medium">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Facebook</a></li>
                                            <br>
                                            <li><a href="#">Twitter</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-4 col-12-medium imp-medium">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Instagram</a></li>
                                            <br>
                                            <li><a href="#">LinkedIn</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                    <div class="col-4 col-12-medium imp-medium">

                        <!-- Blurb -->
                        <section>
                            <h2>Encuentranos</h2>
                            <div>
                                <strong>
									Direccion:
									<br>
								</strong>Carrera 13 N° 65-10 Barrio Chapinero - Bogotá, Colombia.
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
                        </section>

                    </div>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div id="copyright">
            &copy; Skillex. All rights reserved. | Design: Raven Design
        </div>

    </div>

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
