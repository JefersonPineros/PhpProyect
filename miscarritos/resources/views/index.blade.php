@extends('layout.Platilla')
@section('css')
    <link rel="stylesheet" href="static/assets/css/tarjetas.css">
@endsection
@section('presentacion')
<div id="banner">
    <div class="container">
        <div class="row">
            <div class="col-6 col-12-medium">

                <!-- Banner Copy -->
               <p>Elige el carro que necesitas y empieza a disfrutar de tu viaje ...</p>
                   @guest
                    @if (Route::has('login'))

                        <a href="{{ route('login') }}" class="button-large" style="margin-left:10% ;background: #009688;box-shadow:none" >Login</a>
                    @endif
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button-large " style="margin-left: 12%;background:#F5F34B;box-shadow:none" >Registro</a>
                    @endif
                    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </div>
            <div class="col-6 col-12-medium imp-medium">

                <!-- Banner Image -->
                <a class="bordered-feature-image"><img src="static/images/banner.jpg"/></a>

            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
        <!-- Features -->
        <section id="features">
            <div class="container">
                <h2>Conoce los tipos de vehículos que te ofrecemos!</h2><br>
                <div class="row">

                    <!-- flip-card-container #1-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic01.jpg" />
                                    <figcaption>Bajo costo</figcaption>
                                </figure>

                                <ul  class="lista-tarjeta">
                                    <li>Los vehículos de bajo costo se caracterizan por su construcción sumamente económicos, siendo hecho en materiales resistentes más no de alta calidad.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic01.jpg" />
                                </figure>

                                <button><a href="BajoCosto.html">Consulta !</a> </button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #2-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic02.jpg">
                                    <figcaption>Vehículo familiar</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Los vehículos familiares se caracterizan por sus amplias magnitudes tanto en el exterior como en el interior que permiten el traslado de un grupo familiar (en base a un grupo familiar de cuatro a cinco miembros).</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic02.jpg">
                                </figure>

                                <button><a href="VehiculoFamiliar.html">Consulta !</a></button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #3-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic03.jpg">
                                    <figcaption>Sedanes</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Vehículos caracterizados por la presentación de su diseño peculiar que se caracteriza por un capo de gran amplitud, como también por la segmentación del maletero de los asientos, con la finalidad de aportar mayor tamaño
                                        en el interior.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic03.jpg">
                                </figure>

                                <button><a href="Sedan.html">Consulta !</a></button>

                                <!-- can add svg here and remove these eight spans -->
                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #4-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic04.jpg" />
                                    <figcaption>Vehículo de lujo</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Son considerados vehículos de alta gama, tanto por los materiales que los componen como por las características que los mismos pueden aportar, se caracterizan por disponer de un diseño elegante y de amplitud.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic04.jpg" />
                                </figure>

                                <button><a href="Lujo.html">Consulta !</a></button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #5-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic10.jpg">
                                    <figcaption>Deportivos</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Se distingue por su aspecto, luciendo similar a los autos de carrera, se caracterizan por ser de pequeñas proporciones como también por circular a altas velocidades, de modo tal que su aspecto relevante lo constituyen
                                        sus motores.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic10.jpg">
                                </figure>

                                <button><a href="Deportivos.html">Consulta !</a></button>

                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #6-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic11.jpg">
                                    <figcaption>Todoterreno</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Vehículos que cuentan con un diseño compacto y con una apariencia imponente, los mismos se caracterizan por presentar un alto sistema de tracción que permite su circulación en terrenos rústicos y desiguales.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic11.jpg">
                                </figure>

                                <button><a href="Todoterreno.html">Consulta !</a></button>

                                <!-- can add svg here and remove these eight spans -->
                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

                    <!-- flip-card-container #7-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic12.jpg">
                                    <figcaption>Comerciales</figcaption>
                                </figure>

                                <ul class="lista-tarjeta">
                                    <li>Son aquellos vehículos diseñados con el fin de transportar bien sea personas o materiales, estos pueden variar en su tamaño como en la calidad de los materiales.</li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="static/images/pic02.jpg">
                                </figure>

                                <button><a href="Comerciales.html">Consulta !</a></button>

                                <!-- can add svg here and remove these eight spans -->
                                <div class="design-container">
                                    <span class="design design--1"></span>
                                    <span class="design design--2"></span>
                                    <span class="design design--3"></span>
                                    <span class="design design--4"></span>
                                    <span class="design design--5"></span>
                                    <span class="design design--6"></span>
                                    <span class="design design--7"></span>
                                    <span class="design design--8"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /flip-card-container -->

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
                                <li>Información adicional</li>
                                <li>Servicios incluidos</li>
                                <li>Servicios adicionales</li>
                                <li>¿Qué necesitas para alquilar?</li>
                                <li>¿Qué incluye el precio ofrecido?</li>
                                <li>Términos y condiciones</li>
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
                            <p>"Seamos realistas. ¡ Hagamos lo imposible !"</p>
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
@endsection
