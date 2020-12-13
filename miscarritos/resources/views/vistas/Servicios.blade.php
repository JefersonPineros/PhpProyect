@extends('layout.Platilla')
@section('content')

@php
    use App\Http\Controllers\HomeController;
    $listado = HomeController::get_User(1);
@endphp
{{$listado}}
{{-- @foreach ($listado as $item)
    {{ $item->name }}
@endforeach --}}
<section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-6-medium col-12-small">

                        <!-- Feature #1 -->
                        <section>
                            <h2>Servicios incluidos</h2>
                            <h3>Estos son los servicios que vienen incluidos en la cuota de alquiler</h3>
                            <br>

                            <h2>* Disponibilidad de los carros en alquiler las 24 horas.</h2>
                            A partir del momento de firma y entrega segun el contrato de alquiler de carros, se contaran 24 horas como primer día de servicio de alquiler y así sucesivamente hasta la finalización del Contrato del servicio de alquiler de autos.
                            <br>

                            <h2>* Kilometraje Libre.</h2>
                            El Kilometraje es libre apartir del 2 dia de servicio, usted podrá recorrer los Kilómetros que desee a nivel nacional sin ningún costo o recargo adicional.

                            <br>
                            <h2>* Mantenimientos.</h2>
                            Mis Carritos.com asumirá los gastos de mantenimientos preventivos y otros que sean consecuencia del desgaste normal del carros o vehículos en alquiler. Los mismos, serán realizados de forma rigurosa en los diferentes concesionarios o talleres especializados
                            en Colombia, garantizando de esta manera los mejores estándares de calidad en el servicio de alquiler de carros. Estos son algunos de los mantenimientos que brindamos: cambios de aceite, revisión de líquidos, ajuste de suspensión,
                            entre otros.

                            <br>
                            <h2>* Reposición de carros o autos en Bogotá durante el alquiler por mantenimientos.</h2>
                            Mis Carritos.com repondrá vehículos, carros y autos en las siguientes situaciones: desperfecto mecánico en la ciudad de Bogotá y en los días que se realicen los mantenimientos preventivos del vehículo cada 5.000, 8.000 y 10.000 Km de acuerdo a la programación
                            por parte del concesionario de la marca del vehículo.

                            <br>
                            <h2>* Servicio de asistencia las 24 horas.</h2>
                            Durante el contrato, se garantiza la prestación del servicio de atención telefónica por parte de los funcionarios de nuestra compañía las 24 horas; contará con asistencia de emergencias tales como ambulancias y grúas entre otros (servicio que estará disponible
                            por cuenta de nuestra compañía de seguros).

                            <br>
                            <h2>* Servicio a domicilio.</h2>
                            El servicio a domicilio sin recargo depende de la distancia, localidad, barrio y del horario de entrega. Adicionalmente las entregas en los Aeropuertos, los días Domingos y festivos tendran un valor adicional al valor del alquiler del vehiculo.

                            <br>
                            <h2>* Seguros hasta 90%.</h2>
                            Mis Carritos.com ha sido avalada por una de las compañías mas sólidas del sector de seguros, la que nos ofrece una cobertura de hasta 90%. En la sección de Seguros, estos se describen en detalle.

                            <br>
                            <h2>* Conductores Autorizados</h2>
                            Dentro del contrato de alquiler, solamente podrán conducir 2 personas por vehículo sin costo adicional; Sin embargo usted tendrá la opción de incluir un Tercer o Cuarto Conductor con un recargo adicional de $10.000,00 cada uno por día.

                            <br>
                            <h2>* Una silla para infantes</h2>
                            Dando cumplimiento a la reglamentación del Ministerio de Transporte de Colombia para el trasporte de los niños menores a 5 años, nuestra compañía suministrara Una (1) sola silla de bebé totalmente gratis por contrato; las sillas adicionales tendrán un
                            costo de $8.000,00 pesos, diarios cada una.

                        </section>
                    </div>

                    <div class="col-6 col-6-medium col-12-small">

                        <!-- Feature #2 -->
                        <section>
                            <h2>Servicios Adicionales</h2>
                            <h3>Estos son los servicios que vienen incluidos en la cuota de alquiler</h3>

                            <br>
                            <h2>* Servicio de conductor profesional.</h2>
                            Nuestra compañía cuenta el servicio de conductores profesionales altamente calificados para los eventos que usted o su compañía así lo requiera. Dicho servicio tendrá un costo adicional.

                            <br>
                            <h2>* Silla de bebé adicional.</h2>
                            Se suministrara una (1) sola silla de bebé totalmente gratis por contrato; las sillas adicionales tendrán un costo de $8.000,00 pesos, diarios cada una.

                            <br>
                            <h2>* Servicio de GPS</h2>
                            Ofrecemos una unidad de GPS (GARMIN) para su uso durante el período de alquiler con cargo adicional por día. Este dispositivo esta programado para varios idiomas y continene la más amplia información cartogrófica de los departamentos, municipios y ciudades
                            de Colombia. Ya no tendrá que preocuparse si conoce la ciudad. El dispositivo le guiará durante sus recorridos en todo Colombia. La unidad GPS no podra progamarse para evitar los peajes en carreteras.

                            <br>
                            <h2>* Servicio de maletero.</h2>
                            El servicio de maletero tendrá un costo adicional por día, y está diseñado para los clientes que cuntan con mucho equipaje y puedan aumentar el espacio para las maletas en la parte superior de las camionetas. Se instalará el dispositivo con capacidad
                            de 3 maletas (2 medianas y una pequeña).

                        </section>
                    </div>
                </div>
            </div>
        </section>
@endsection
