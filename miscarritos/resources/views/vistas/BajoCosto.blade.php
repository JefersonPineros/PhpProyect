@extends('layout.Platilla')

@section('css')
    <link rel="stylesheet" href="static/assets/css/tarjetas.css">
@endsection
@section('presentacion')

        <!-- Header -->
        <section id="header">
            <div id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-12-medium">
                            <!-- Banner Copy -->
                            <p>Vehículos Bajo Costo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                    <img src="images/BajoCosto/ChevroletAgile.jpg" />
                                    <figcaption>Chevrolet Agile</figcaption>
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
                                    <img src="images/BajoCosto/ChevroletAgile.jpg" />
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
                                    <img src="images/BajoCosto/ChevroletCelta.jpg">
                                    <figcaption>Chevrolet Celta</figcaption>
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
                                    <img src="images/BajoCosto/ChevroletCelta.jpg">
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
                                    <img src="images/BajoCosto/ChevroletCobalt.jpg">
                                    <figcaption>Chevrolet Cobalt</figcaption>
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
                                    <img src="images/BajoCosto/ChevroletCobalt.jpg">
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

                    <!-- flip-card-container #4-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/BajoCosto/ChevroletSail.jpg" />
                                    <figcaption>Chevrolet Sail</figcaption>
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
                                    <img src="images/BajoCosto/ChevroletSail.jpg" />
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

                    <!-- flip-card-container #5-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/BajoCosto/Citroën2CV.jpg">
                                    <figcaption>Citroën 2 CV</figcaption>
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
                                    <img src="images/BajoCosto/Citroën2CV.jpg">
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

                    <!-- flip-card-container #6-->
                    <div class="flip-card-container">
                        <div class="flip-card">

                            <div class="card-front">
                                <figure>
                                    <div class="img-bg"></div>
                                    <img src="images/BajoCosto/CitroënMéhari.jpg">
                                    <figcaption>Citroën Méhari</figcaption>
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
                                    <img src="images/BajoCosto/CitroënMéhari.jpg">
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