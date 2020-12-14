@extends('layout.Platilla')

@section('css')
    <link rel="stylesheet" href="static/assets/css/tarjetas.css">
@endsection
@section('presentacion')

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
                                    <img src="images/Comerciales/Autobús.jpg" />
                                    <figcaption>Autobús</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Autobús.jpg" />
                                </figure>

                                <button>Reserva !</button>

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
                                    <img src="images/Comerciales/Minibús.jpg">
                                    <figcaption>Minibús</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Minibús.jpg">
                                </figure>

                                <button>Reserva !</button>

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
                                    <img src="images/Comerciales/Microbús.jpg">
                                    <figcaption>Microbús</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Microbús.jpg">
                                </figure>

                                <button>Reerva !</button>

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

                    <!-- flip-card-container #3-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Midibús.jpg">
                                    <figcaption>Midibús</figcaption>
                                </figure>

                                <ul>
                                    <li>Pasajeros: </li>
                                    <li>Puertas: </li>
                                    <li>Calefacción: </li>
                                    <li>Motor: </li>
                                    <li>Tipo combustible: </li>
                                </ul>
                            </div>

                            <div class="card-back">
                                <!-- only if the image is necessary -->
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/Comerciales/Midibús.jpg">
                                </figure>

                                <button>Reerva !</button>

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
        </section>

        @endsection