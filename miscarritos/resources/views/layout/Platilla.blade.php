<!DOCTYPE HTML>

<html>

<head>
    <title>Mis Carritos.com</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="static/assets/css/main.css"/>
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
                            <a href="{{URL::route('solicitar')}}">Two Column #1</a>
                            <a href="#">Two Column #2</a>
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
                            <h2>Links to Important Stuff</h2>
                            <div>
                                <div class="row">
                                    <div class="col-3 col-12-small">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Neque amet dapibus</a></li>
                                            <li><a href="#">Sed mattis quis rutrum</a></li>
                                            <li><a href="#">Accumsan suspendisse</a></li>
                                            <li><a href="#">Eu varius vitae magna</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 col-12-small">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Neque amet dapibus</a></li>
                                            <li><a href="#">Sed mattis quis rutrum</a></li>
                                            <li><a href="#">Accumsan suspendisse</a></li>
                                            <li><a href="#">Eu varius vitae magna</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 col-12-small">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Neque amet dapibus</a></li>
                                            <li><a href="#">Sed mattis quis rutrum</a></li>
                                            <li><a href="#">Accumsan suspendisse</a></li>
                                            <li><a href="#">Eu varius vitae magna</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3 col-12-small">
                                        <ul class="link-list last-child">
                                            <li><a href="#">Neque amet dapibus</a></li>
                                            <li><a href="#">Sed mattis quis rutrum</a></li>
                                            <li><a href="#">Accumsan suspendisse</a></li>
                                            <li><a href="#">Eu varius vitae magna</a></li>
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
								</strong> Calle 93 Nº 49-14 Barrio La Castellana - Bogotá, Colombia.
                            </div>
                            <div>
                                <strong>PBX:</strong>
                                <a>(1) 7036605</a>
                                <br>
                                <strong>Móvil</strong>
                                <a>+57 (311) 2272723</a>
                            </div>
                            <div>
                                <strong>Email:</strong>
                                <a>informacion@miscarritos.com</a>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div id="copyright">
            &copy; Skillex. All rights reserved. | Design: <a href="http://html5up.net">SKILLEX</a>
        </div>

    </div>

    <!-- Scripts -->
    <script src="static/assets/js/jquery.min.js"></script>
    <script src="static/assets/js/browser.min.js"></script>
    <script src="static/assets/js/breakpoints.min.js"></script>
    <script src="static/assets/js/util.js"></script>
    <script src="static/assets/js/main.js"></script>

</body>

</html>
