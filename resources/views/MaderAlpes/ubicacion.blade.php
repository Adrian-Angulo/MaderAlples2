@extends('Maderalpes.layouts.appAlpes')

@section('contenido')
        <!-- Under Nav Start -->
        <div class="container-fluid bg-white py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left mb-3 mb-lg-0">
                        <div class="d-inline-flex text-left">
                            <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h5>Nuestra Oficina</h5>
                                <p class="m-0">Cl. 17 #1545, Centro, Pasto, Nariño</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-left text-lg-center mb-3 mb-lg-0">
                        <div class="d-inline-flex text-left">
                            <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h5>Gmail</h5>
                                <p class="m-0">info@maderalpes.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-left text-lg-right mb-3 mb-lg-0">
                        <div class="d-inline-flex text-left">
                            <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3"></h1>
                            <div class="d-flex flex-column">
                                <h5>Llámanos</h5>
                                <p class="m-0">317 5151701</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Under Nav End -->
<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Ubicación</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white" href="index.html">Inicio</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <span class="text-primary">Ubicación</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Location Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Encuéntranos</h6>
                <h1 class="mb-4 section-title">Nuestra Oficina Principal en Pasto</h1>
                <p>
                    Estamos ubicados estratégicamente en el barrio Champagnat para servirte de manera rápida y eficiente.
                    Ven y conoce nuestro taller y show-room de muebles personalizados.
                </p>
                <ul class="list-unstyled mb-4">
                    <li><i class="fa fa-map-marker-alt text-primary mr-2"></i><strong>Dirección:</strong> Cl. 17 #15-45, Pasto, Nariño</li>
                    <li><i class="fa fa-phone-alt text-primary mr-2"></i><strong>Teléfono:</strong> 317 515 1701</li>
                    <li><i class="fa fa-envelope text-primary mr-2"></i><strong>Email:</strong> info@maderalpes.com</li>
                </ul>
                <p class="mb-2"><strong>Horario de atención:</strong></p>
                <ul class="list-unstyled mb-4">
                    <li>Lunes: 7 a.m. – 5 p.m.</li>
                    <li>Martes: 7 a.m. – 5 p.m.</li>
                    <li>Miércoles: 7 a.m. – 5 p.m.</li>
                    <li>Jueves: 7 a.m. – 5 p.m.</li>
                    <li>Viernes: 7 a.m. – 5 p.m.</li>
                    <li>Sábado: 7 a.m. – 1 p.m.</li>
                    <li>Domingo: Cerrado</li>
                </ul>
                <a href="https://maps.app.goo.gl/RN28zkkqZRGJTPNG7" target="_blank" class="btn btn-outline-primary py-2 px-4">Ver en el mapa</a>
            </div>
           
            <div class="col-12 text-center mb-4 col-lg-6" style="margin-top: 170px;">
                <div class="mb-4 shadow rounded overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15908.342574832924!2d-77.29189925!3d1.21472995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e296f56aa5c1c69%3A0xd19d4c4dfd78b317!2sCl.%2017%20%2315-45%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1715100000000" 
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location End -->
        <!-- Sucursales -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="text-primary text-uppercase">Otras Sucursales</h2>
            </div>
            <div class="col-12 text-center col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Sede Principal MADERATLAS Ipiales</h5>
                        <p class="card-text mb-2">
                            <strong>Dirección:</strong><br>
                            A 115, Cra. 3 Nte., Ipiales, Nariño
                        </p>
                        <p class="card-text mb-2">
                            <strong>Teléfono:</strong> 318 318 0453
                        </p>
                        <p class="card-text mb-2">
                            <strong>Horario de atención:</strong>
                        </p>
                        <ul class="list-unstyled mb-3">
                            <li>Lunes: 7 a.m. – 5 p.m.</li>
                            <li>Martes: 7 a.m. – 5 p.m.</li>     
                            <li>Miércoles: 7 a.m. – 5 p.m.</li>
                            <li>Jueves: 7 a.m. – 5 p.m.</li>
                            <li>Viernes: 7 a.m. – 5 p.m.</li>
                            <li>Sábado: 7 a.m. – 2 p.m.</li>
                            <li>Domingo: Cerrado</li>
                        </ul>
                        <a href="https://maps.app.goo.gl/boHS5uWnd93uG4kp8" target="_blank" class="btn btn-outline-primary">Ver en el mapa</a>
                    </div>
                </div> 
            </div>
            <div class="col-12 text-center mb-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Sucursal MADERALPES Túquerres</h5>
                        <p class="card-text mb-2">
                            <strong>Dirección:</strong><br>
                            Cl. 19 #14-43, Centro, Túquerres, Nariño
                        </p>
                        <p class="card-text mb-2">
                            <strong>Teléfono:</strong> 317 275 8589
                        </p>
                        <p class="card-text mb-2">
                            <strong>Horario de atención:</strong>
                        </p>
                        <ul class="list-unstyled mb-3">
                            <li>Lunes: 7 a.m. – 5 p.m.</li>
                            <li>Martes: 7 a.m. – 5 p.m.</li>                            
                            <li>Miércoles: 7 a.m. – 5 p.m.</li>
                            <li>Jueves: 7 a.m. – 5 p.m.</li>
                            <li>Viernes: 7 a.m. – 5 p.m.</li>
                            <li>Sábado: 7 a.m. – 1 p.m.</li>
                            <li>Domingo: Cerrado</li>
                        </ul>
                        <a href="https://maps.app.goo.gl/SrS96XJfJjDDmPY47" target="_blank" class="btn btn-outline-primary">Ver en el mapa</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location End -->    
@endsection