@extends('MaderAlpes.layouts.appAlpes')

@section('contenido')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">PQRS</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Inicio</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">PQRS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- PQRS Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Formulario de PQRS</h6>
                    <h1 class="mb-4">Peticiones, Quejas, Reclamos y Sugerencias</h1>
                    <p class="mb-4">En Maderalpes valoramos su opinión. Complete el siguiente formulario para enviarnos sus peticiones, quejas, reclamos o sugerencias. Nos comprometemos a responder en un plazo máximo de 5 días hábiles.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-check text-primary mr-3"></i>
                                    <h6 class="font-weight-bold m-0">Peticiones</h6>
                                </div>
                                <p>Solicitudes de información o servicios.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-exclamation-triangle text-primary mr-3"></i>
                                    <h6 class="font-weight-bold m-0">Quejas</h6>
                                </div>
                                <p>Manifestaciones de insatisfacción.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-exclamation-circle text-primary mr-3"></i>
                                    <h6 class="font-weight-bold m-0">Reclamos</h6>
                                </div>
                                <p>Exigencias por un derecho que ha sido vulnerado.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fa fa-lightbulb text-primary mr-3"></i>
                                    <h6 class="font-weight-bold m-0">Sugerencias</h6>
                                </div>
                                <p>Propuestas para mejorar nuestros servicios.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary p-5 rounded">
                        <form action="{{-- {{ route('pqrs.store') }} --}}" method="POST" id="pqrsForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Nombre completo *" required name="nombre" id="nombre">
                                <div class="invalid-feedback">Por favor ingrese su nombre completo.</div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Correo electrónico *" required name="email" id="email">
                                <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control border-0 p-4" placeholder="Teléfono *" required name="telefono" id="telefono" pattern="[0-9]{10}">
                                <div class="invalid-feedback">Por favor ingrese un número de teléfono válido (10 dígitos).</div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="tipo" required id="tipo">
                                    <option value="" selected disabled>Seleccione tipo de solicitud *</option>
                                    <option value="peticion">Petición</option>
                                    <option value="queja">Queja</option>
                                    <option value="reclamo">Reclamo</option>
                                    <option value="sugerencia">Sugerencia</option>
                                </select>
                                <div class="invalid-feedback">Por favor seleccione un tipo de solicitud.</div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="sucursal" id="sucursal">
                                    <option value="" selected disabled>Seleccione sucursal (opcional)</option>
                                    <option value="pasto">Pasto</option>
                                    <option value="ipiales">Ipiales</option>
                                    <option value="tuquerres">Túquerres</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-0 p-4" rows="6" placeholder="Detalle su solicitud *" required name="mensaje" id="mensaje"></textarea>
                                <div class="invalid-feedback">Por favor detalle su solicitud.</div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terminos" name="terminos" required>
                                    <label class="custom-control-label text-white" for="terminos">Acepto la <a href="#" class="text-white font-weight-bold">política de tratamiento de datos personales</a> *</label>
                                    <div class="invalid-feedback">Debe aceptar la política de tratamiento de datos.</div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Enviar PQRS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PQRS End -->

    <!-- Timeline Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 text-center">Proceso de atención</h6>
                    <h1 class="mb-5 text-center">¿Cómo gestionamos su PQRS?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel process-carousel position-relative">
                        <div class="process-item">
                            <div class="position-relative mb-4">
                                <i class="fa fa-paper-plane fa-4x text-primary position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);"></i>
                                <div class="border-bottom border-primary pt-5 pb-4 px-4">
                                    <h4 class="text-primary">Recepción</h4>
                                    <p class="mb-0">Recibimos su solicitud a través de este formulario</p>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Paso 1</h5>
                        </div>
                        <div class="process-item">
                            <div class="position-relative mb-4">
                                <i class="fa fa-check-circle fa-4x text-primary position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);"></i>
                                <div class="border-bottom border-primary pt-5 pb-4 px-4">
                                    <h4 class="text-primary">Confirmación</h4>
                                    <p class="mb-0">Enviamos confirmación de recepción a su correo</p>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Paso 2</h5>
                        </div>
                        <div class="process-item">
                            <div class="position-relative mb-4">
                                <i class="fa fa-search fa-4x text-primary position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);"></i>
                                <div class="border-bottom border-primary pt-5 pb-4 px-4">
                                    <h4 class="text-primary">Análisis</h4>
                                    <p class="mb-0">Analizamos su caso y lo dirigimos al área correspondiente</p>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Paso 3</h5>
                        </div>
                        <div class="process-item">
                            <div class="position-relative mb-4">
                                <i class="fa fa-cog fa-4x text-primary position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);"></i>
                                <div class="border-bottom border-primary pt-5 pb-4 px-4">
                                    <h4 class="text-primary">Gestión</h4>
                                    <p class="mb-0">Trabajamos en la solución de su solicitud</p>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Paso 4</h5>
                        </div>
                        <div class="process-item">
                            <div class="position-relative mb-4">
                                <i class="fa fa-reply fa-4x text-primary position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);"></i>
                                <div class="border-bottom border-primary pt-5 pb-4 px-4">
                                    <h4 class="text-primary">Respuesta</h4>
                                    <p class="mb-0">Le enviamos respuesta en máximo 5 días hábiles</p>
                                </div>
                            </div>
                            <h5 class="font-weight-bold">Paso 5</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline End -->

    <!-- FAQ Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-0 pt-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Preguntas frecuentes</h6>
                    <h1 class="mb-4 section-title">Todo lo que necesita saber sobre nuestro sistema PQRS</h1>
                    <div class="accordion" id="accordionFAQ">
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-primary" id="headingOne">
                                <h6 class="mb-0 text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-question-circle mr-2"></i> ¿Cuál es el tiempo de respuesta para mi PQRS?
                                </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    En Maderalpes nos comprometemos a dar respuesta a todas las PQRS en un plazo máximo de 5 días hábiles. Para casos complejos, le informaremos si requerimos tiempo adicional.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-primary" id="headingTwo">
                                <h6 class="mb-0 text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-question-circle mr-2"></i> ¿Cómo puedo hacer seguimiento a mi solicitud?
                                </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Al enviar su PQRS, recibirá un número de radicado a su correo electrónico. Puede consultar el estado de su solicitud llamando a nuestra línea de atención 317 5151701 o respondiendo al correo de confirmación.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 mb-3">
                            <div class="card-header bg-primary" id="headingThree">
                                <h6 class="mb-0 text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-question-circle mr-2"></i> ¿Qué información debo proporcionar para una respuesta efectiva?
                                </h6>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Para atender mejor su solicitud, es importante que proporcione información detallada sobre su caso: fecha de compra, número de factura, productos involucrados, sucursal donde realizó la compra y cualquier evidencia que pueda ayudarnos a resolver su caso.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="card-header bg-primary" id="headingFour">
                                <h6 class="mb-0 text-white" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-question-circle mr-2"></i> ¿Qué sucede si no estoy satisfecho con la respuesta?
                                </h6>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Si no está satisfecho con la respuesta recibida, puede solicitar una reconsideración respondiendo al correo de respuesta o presentando una nueva PQRS haciendo referencia al caso anterior. Su solicitud será escalada a un nivel superior de atención.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="img-fluid" src="img/pqrs.jpg" alt="Sistema PQRS Maderalpes">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
@endsection

@section('scripts')
<script>
    // Validación del formulario
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var form = document.getElementById('pqrsForm');
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();

    // Inicialización del carrusel de proceso
    $(".process-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        margin: 30,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });
</script>
@endsection