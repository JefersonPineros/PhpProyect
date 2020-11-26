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
                        <h1><a href="index.html" id="logo">Mis Carritos.com</a></h1>

                        <!-- Nav -->
                        <nav id="nav">
                            <a href="<?php Route::get('HomePage', function ($id) {
                                return view('Nosotros');
                            }); ?>">Nosotros</a>
                            <a href="Servicios.html">Servicios</a>
                            <a href="#">Two Column #1</a>
                            <a href="#">Two Column #2</a>
                            <a href="">Contactenos</a>
                        </nav>

                    </div>
                </div>
            </div>
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-12-medium">

                            <!-- Banner Copy -->
                            <p>Elige el carro que necesitas y empieza a disfrutar de tu viaje ...</p>
                            <a href="#" class="button-large">Login</a>
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href=" @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

                        </div>
                        <div class="col-6 col-12-medium imp-medium">

                            <!-- Banner Image -->
                            <a href="#" class="bordered-feature-image"><img src="static/images/banner.jpg" alt="" /></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #1 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic01.jpg" alt="" /></a>
                            <h2>Bajo Costo</h2>
                            <p>
                                Los vehículos de bajo costo se caracterizan por su construcción sumamente económicos, siendo hecho en materiales resistentes más no de alta calidad.
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #2 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic02.jpg" alt="" /></a>
                            <h2>Vehículo familiar</h2>
                            <p>
                                Los vehículos familiares se caracterizan por sus amplias magnitudes tanto en el exterior como en el interior que permiten el traslado de un grupo familiar (en base a un grupo familiar de cuatro a cinco miembros).
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #3 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic03.jpg" alt="" /></a>
                            <h2>Sedanes</h2>
                            <p>
                                Vehículos caracterizados por la presentación de su diseño peculiar que se caracteriza por un capo de gran amplitud, como también por la segmentación del maletero de los asientos, con la finalidad de aportar mayor tamaño en el interior; pese a su apariencia
                                externa, los maleteros internos de estos vehículos gozan de un gran tamaño.
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #4 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic04.jpg" alt="" /></a>
                            <h2>Vehículo de lujo.</h2>
                            <p>
                                Son considerados vehículos de alta gama, tanto por los materiales que los componen como por las características que los mismos pueden aportar, se caracterizan por disponer de un diseño elegante y de amplitud.
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #5 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic10.jpg" alt="" /></a>
                            <h2>Deportivos</h2>
                            <p>
                                Se distingue por su aspecto, luciendo similar a los autos de carrera, se caracterizan por ser de pequeñas proporciones como también por circular a altas velocidades, de modo tal que su aspecto relevante lo constituyen sus motores.
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #6 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic11.jpg" alt="" /></a>
                            <h2>Todoterreno</h2>
                            <p>
                                Vehículos que cuentan con un diseño compacto y con una apariencia imponente, los mismos se caracterizan por presentar un alto sistema de tracción que permite su circulación en terrenos rústicos y desiguales.
                            </p>
                        </section>
                    </div>

                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Feature #7 -->
                        <section>
                            <a href="#" class="bordered-feature-image"><img src="static/images/pic12.jpg" alt="" /></a>
                            <h2>Comerciales</h2>
                            <p>
                                Son aquellos vehículos diseñados con el fin de transportar bien sea personas o materiales, estos pueden variar en su tamaño como en la calidad de los materiales.
                            </p>
                        </section>
                    </div>

                </div>
            </div>
        </section>

        <!-- Content -->
        <section id="content">
            <div class="container">
                <div class="row aln-center">
                    <div class="col-4 col-12-medium">

                        <!-- Box #1 -->
                        <section>
                            <header>
                                <h2>Quienes Somos</h2>
                                <h3>Conoce nuestra empresa</h3>
                            </header>
                            <a href="Nosotros.html" class="feature-image"><img src="static/images/pic05.jpg" alt="" /></a>
                            <p>
                                Mis Carritos.com ofrece una opción creada para movilizarse dentro y fuera de la ciudad con tus amigos o familiares, también ofrecemos servicios empresariales, estamos comprometidos con la excelencia en el servicio encontraras claridad en tarifas y políticas.
                                ¡Has llegado al lugar correcto! Revalorizamos tu tiempo para que puedas continuar finiquitando los demás detalles del viaje, obtienes tranquilidad y seguridad con reservas.
                            </p>
                        </section>

                    </div>
                    <div class="col-4 col-6-medium col-12-small">

                        <!-- Box #2 -->
                        <section>
                            <header>
                                <h2>Qué hacemos?</h2>
                                <h3>Conoce nuestros servicios</h3>
                            </header>
                            <ul class="check-list">
                                <li>Disponibilidad de los carros en alquiler las 24 horas </li>
                                <li>Kilometraje Libre.</li>
                                <li>Mantenimientos.</li>
                                <li>Reposición de carros o autos en Bogotá durante el alquiler por mantenimientos.</li>
                                <li>Servicio de asistencia las 24 horas.</li>
                                <li>Servicio a domicilio.</li>
                                <li>Seguros hasta 90%.</li>
                                <li>Una silla para infantes.</li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-4 col-6-medium col-12-small">

                        <!-- Box #3 -->
                        <section>
                            <header>
                                <h2>Nuestro Equipo</h2>
                                <h3>Conoce nuestro equipo de trabajo</h3>
                            </header>
                            <ul class="quote-list">
                                <li>
                                    <img src="static/images/pic07.jpg" alt="" />
                                    <p>"El primer paso no te lleva donde quieres ir, pero te acerca donde quieres estar."</p>
                                    <span>Wainer Gaitán, Web Design</span>
                                </li>
                                <li>
                                    <img src="static/images/pic06.jpg" alt="" />
                                    <p>"Seamos realistas. ¡ Hagamos lo imposible."</p>
                                    <span>Johan Gamez, Web Design</span>
                                </li>
                                <li>
                                    <img src="static/images/pic08.jpg" alt="" />
                                    <p>"Lucha por tus sueños o los demás te impondrán los suyos."</p>
                                    <span>Jefferson Piñeros, Web Design</span>
                                </li>
                                <li>
                                    <img src="static/images/pic09.jpg" alt="" />
                                    <p>"Insistir, persistir y nunca desistir."</p>
                                    <span>Ruby Romero, Web Design</span>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>
            </div>
        </section>

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
