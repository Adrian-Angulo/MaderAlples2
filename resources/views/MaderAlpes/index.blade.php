@extends('MaderAlpes.layouts.appAlpes')
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
                            <h5>Llamanos</h5>
                            <p class="m-0">317 5151701</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Under Nav End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Fondo1Maderalpess.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Desarrollo creativo de interiores</h4>
                            <h3 class="display-3 text-white mb-md-4">Haz de tu hogar un lugar mejor</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/fondo2Maderalpes.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Desarrollo creativo de interiores</h4>
                            <h3 class="display-3 text-white mb-md-4">Sientete en paz en tu hogar</h3>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <img src="img/añosexperiencia.png" alt="Icono de madera" class="display-1 text-secondary mb-3" style="width: 80px; height: 80px;">                        
                        <h4 class="display-3 mb-3">2+</h4>
                        <h1 class="m-0">Años de experiencia</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Aprenda de nosotros</h6>
                    <h1 class="mb-4 section-title">Expertos en Diseño y Carpintería a Medida en la Región</h1>
                    <p>En MaderAlpes nos especializamos en la fabricación de muebles y estructuras de madera de alta calidad, combinando técnicas tradicionales con innovación moderna. Con más de dos años de experiencia, nos hemos consolidado como una empresa confiable, apasionada por el diseño personalizado y el trabajo bien hecho. Nos enorgullece trabajar con materiales sostenibles y ofrecer soluciones únicas para hogares, negocios y proyectos arquitectónicos.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño de Proyectos</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Interiores y Exteriores</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño Comercial</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Diseño Residencial</h5>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Servicios Inicio -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nuestros Servicios</h6>
                <h1 class="mb-4 section-title">Diseños de Carpintería e Interiorismo para Tu Hogar</h1>
                <p>En MaderAlpes ofrecemos soluciones únicas en carpintería y diseño de interiores, adaptadas a cada espacio y estilo de vida. Transformamos ambientes con madera de alta calidad, un diseño cuidadoso y un acabado impecable que refleja calidez, funcionalidad y elegancia.</p>
                <a href="#" class="btn btn-primary mt-3 py-2 px-4">Ver más</a>
            </div>
            <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                <div class="owl-carousel service-carousel position-relative">
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Diseño de Dormitorios</h5>
                        <p class="m-0">Creamos espacios de descanso acogedores y funcionales, con mobiliario personalizado y acabados de alta calidad.</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Diseño de Cocinas</h5>
                        <p class="m-0">Diseñamos cocinas prácticas y elegantes, optimizando cada centímetro para tu comodidad y estilo de vida.</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Diseño de Baños</h5>
                        <p class="m-0">Renovamos baños con muebles de madera hechos a medida, combinando funcionalidad, estética y durabilidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Servicios Fin --><!-- Características Inicio -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">¿Por qué elegirnos?</h6>
                <h1 class="mb-4 section-title">Más de 2 Años de Experiencia en Diseño y Carpintería Personalizada</h1>
                <p class="mb-4">En MaderAlpes, combinamos creatividad, precisión y pasión por la madera para transformar espacios. Cada proyecto es una oportunidad para crear ambientes funcionales, cálidos y estéticamente únicos, siempre con materiales de calidad y un compromiso auténtico con el cliente.</p>
                <ul class="list-inline">
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Diseños personalizados para cada cliente</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Materiales duraderos y de alta calidad</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Atención al detalle y satisfacción garantizada</h5></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img class="h-100" src="img/imagenGrandePQElegirnos3.png" alt="MaderAlpes diseño carpintería">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Características Fin -->
    <!-- Proyectos Inicio -->
    <style>.portfolio-img img { width: 100%;height: 300px; object-fit: cover; }</style>
<div class="container-fluid py-5" >
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nuestros Proyectos</h6>
                <h1 class="mb-4">Algunos de Nuestros Trabajos en Carpintería y Diseño de Interiores</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active" data-filter="*">Todos</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".first">Completados</li>
                </ul>
            </div>
        </div>
        <div class="row mx-1 portfolio-container">
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos1.2Maderalpes.png" alt="Cocina Moderna en Madera">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Cocina Moderna Color Roble natural</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos1Maderalpes.png" data-lightbox="Proyectos1"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos2.1Maderalpes.png" alt="Dormitorio Rústico">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Closet a Medida</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos2Maderalpes.png" data-lightbox="Proyectos2"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos1.png" alt="Baño Elegante en Madera">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Cocina Moderna Color Nogal</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos4.png" alt="Estudio Minimalista">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Muebles Personalizados</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos4.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos3.png" alt="Closet Personalizado">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Closet a Medida</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos3.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                        <img class="img-fluid" src="img/Proyectos5.png" alt="Comedor Familiar">
                    </div>
                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white mb-4">Cocina Moderna Color Blanco Lacado</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-outline-primary m-1" href="img/Proyectos5.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Proyectos Fin -->
    <!-- Team Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                    <h6 class="text-white font-weight-normal text-uppercase mb-3">Nuestro Equipo</h6>
                    <h1 class="mb-0 text-center">Conoce a los miembros de Maderalpes</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">
                    <!-- Diseñador -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="Diseñador">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Diseñador</h5>
                            <p class="m-0">Encargado del diseño de productos</p>
                        </div>
                    </div>
                    <!-- Operador de maquinarias -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="Operador de Maquinarias">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Operador de Maquinarias</h5>
                            <p class="m-0">Manejo y control de equipos de producción</p>
                        </div>
                    </div>
                    <!-- Vendedor puerta a puerta -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="Vendedor">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Vendedor puerta a puerta</h5>
                            <p class="m-0">Promoción directa de productos</p>
                        </div>
                    </div>
                    <!-- Ensamblador de partes -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="Ensamblador">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Ensamblador de partes</h5>
                            <p class="m-0">Montaje y armado de productos</p>
                        </div>
                    </div>
                    <!-- Contador -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-5.jpg" alt="Contador">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Contador</h5>
                            <p class="m-0">Gestión contable y financiera</p>
                        </div>
                    </div>
                    <!-- Transportador 1 -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-6.jpg" alt="Transportador">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Transportador</h5>
                            <p class="m-0">Entrega de productos</p>
                        </div>
                    </div>
                    <!-- Transportador 2 -->
                    <div class="team d-flex flex-column text-center mx-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-7.jpg" alt="Transportador">
                        </div>
                        <div class="d-flex flex-column bg-secondary text-center py-3">
                            <h5 class="text-white">Transportador</h5>
                            <p class="m-0">Apoyo logístico en despachos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin del equipo uwu -->
   <!-- Testimonial Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-5 pr-md-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonios</h6>
                <h1 class="mb-4 section-title">Lo que dicen nuestros clientes</h1>
                <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="Cliente 1">
                            <div class="ml-3">
                                <h5>Juan Rodríguez</h5>
                                <i>Cliente residencial</i>
                            </div>
                        </div>
                        <p>“El mueble que me hicieron superó mis expectativas. Maderalpes se encargó de cada detalle con mucha dedicación.”</p>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="Cliente 2">
                            <div class="ml-3">
                                <h5>Laura Gómez</h5>
                                <i>Diseñadora de interiores</i>
                            </div>
                        </div>
                        <p>“Trabajar con Maderalpes ha sido una experiencia excelente. Siempre cumplen los tiempos y la calidad es insuperable.”</p>
                    </div>
                </div>
            </div>
            <style>.estrellas-img img {width: 200%; max-height: 350px; object-fit: contain;}</style>
            <div class="col-md-5 estrellas-img">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img src="img/5Estrellas.png" alt="Clientes felices">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
   
@endsection