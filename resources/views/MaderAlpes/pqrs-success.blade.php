<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maderalpes Pasto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="madera, tableros, herrajes, Pasto, MaderAlpes">
    <meta name="description"
        content="MaderAlpes: Distribuidor de tableros, herrajes y accesorios en Pasto, Ipiales y Túquerres.">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 display-5 text-white"><span class="text-primary">MADER</span>ALPES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <li class="nav-item"><a href="/" class="nav-link active">Inicio</a></li>
                        <li class="nav-item"><a href="{{ route('nosotros') }}"class="nav-link">Nosotros</a></li>
                        <li class="nav-item"><a href="{{ route('catalogo') }}"class="nav-link">Catálogo</a></li>
                        <li class="nav-item"><a href="{{ route('pqrs') }}"class="nav-link">PQRS</a></li>
                        <li class="nav-item"><a href="{{ route('ubicacion') }}"class="nav-link">Ubicación</a></li>
                        <li class="nav-item"><a href="{{ route('contacto') }}"
                                class="nav-item nav-link active">Contacto</a></li>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Solicitud Enviada</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="/">Inicio</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary" href="{{ route('pqrs') }}">PQRS</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Confirmación</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Success Message Start -->
    <div class="container-fluid py-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <i class="fa fa-check-circle text-primary mb-4" style="font-size: 100px;"></i>
                    <h1 class="mb-4">¡Gracias por su solicitud!</h1>
                    <p class="mb-4">Su PQRS ha sido recibida correctamente y será atendida a la brevedad posible.</p>

                    <div class="bg-light p-4 mb-4 rounded">
                        <h5>Número de radicado:</h5>
                        <h3 class="text-primary">{{ $radicado }}</h3>
                        <p class="mb-0">Guarde este número para hacer seguimiento a su solicitud.</p>
                    </div>

                    <p>Hemos enviado un correo de confirmación a la dirección de email proporcionada con los detalles de
                        su solicitud.</p>
                    <p>Nos comprometemos a dar respuesta en un plazo máximo de 5 días hábiles.</p>

                    <div class="mt-5">
                        <a href="/" class="btn btn-primary mr-3">Volver al inicio</a>
                        <a href="{{ route('pqrs') }}" class="btn btn-secondary">Enviar otra solicitud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Message End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <!-- Información de contacto -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Contáctanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Cl. 17 #1545, Centro, Pasto, Nariño</p>
                <p><i class="fa fa-phone-alt mr-2"></i>317 5151701</p>
                <p><i class="fa fa-envelope mr-2"></i>info@maderalpes.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://www.facebook.com/profile.php?id=61555494215461"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://www.instagram.com/maderalpes_pasto?igsh=eXlta2kyYzJ5eDBu"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <!-- Enlaces rápidos -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Enlaces Rápidos</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white mb-2" href="nosotros.html"><i class="fa fa-angle-right mr-2"></i>Sobre
                        Nosotros</a>
                    <a class="text-white mb-2" href="catalogo.html"><i class="fa fa-angle-right mr-2"></i>Nuestro
                        Catalogo</a>
                    <a class="text-white mb-2" href="ubicacion.html"><i class="fa fa-angle-right mr-2"></i>Ubicanos
                        Mejor</a>
                    <a class="text-white" href="contacto.html"><i class="fa fa-angle-right mr-2"></i>Contáctanos</a>
                </div>
            </div>
            <!-- Información institucional -->
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Nuestra Empresa</h4>
                <p><strong>Registrada:</strong> 7 de enero de 2023</p>
                <p><strong>Filial de:</strong> MADERATLAS</p>
                <p><strong>Sucursales:</strong> Tuquerres e Ipiales</p>
                <p><strong>NIT:</strong> 1086103024-3</p>
                <a href="{{ route('login') }}"
                    class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Administracion</a>
            </div>
            <!-- Formulario de boletín -->
            <div class="col-lg-3 col-md-6 mb-5 text-center">
                <img src="img/logoMaderalpes.png" alt="Logotipo Maderalpes" class="img-fluid"
                    style="max-width: 200px;">
                <p class="mt-3">Distribuidor líder de tableros, herrajes y soluciones para mobiliario en el sur de
                    Colombia.</p>
            </div>
        </div>

        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Maderalpes</a>. All Rights Reserved.
                Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
