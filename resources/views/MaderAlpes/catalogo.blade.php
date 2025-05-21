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
                            <h5>Llámanos</h5>
                            <p class="m-0">317 5151701</p>
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
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">CATÁLOGO</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <!-- Blog Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">CATÁLOGO</h6>
                    <h1 class="mb-4">PRODUCTOS</h1>
                </div>
            </div>
            <div class="row pb-3">
                @foreach ($productos as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img class="card-img-top img-fluid rounded-top"
                                src="{{ asset('storage/' . ($producto->imagen ?? 'Productos1Maderalpes.png')) }}"
                                alt="{{ $producto->nombre }}" style="object-fit:cover; height:220px;">
                            <div class="card-body bg-white p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title text-primary font-weight-bold text-truncate"
                                        title="{{ $producto->nombre }}">{{ $producto->nombre }}</h5>
                                    <p class="card-text text-secondary small" style="min-height:60px;">
                                        {{ Str::limit($producto->descripcion, 80) }}</p>
                                </div>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#productoModal{{ $producto->id }}">
                                        Ver detalles
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de Detalles del Producto -->
                    <div class="modal fade" id="productoModal{{ $producto->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="productoModalLabel{{ $producto->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="productoModalLabel{{ $producto->id }}">
                                        {{ $producto->nombre }}</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal"
                                        aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body d-flex flex-wrap">
                                    <div class="col-md-5 p-0 mb-3 mb-md-0">
                                        <img src="{{ asset('storage/' . ($producto->imagen ?? 'Productos1Maderalpes.png')) }}"
                                            alt="{{ $producto->nombre }}" class="img-fluid rounded"
                                            style="max-height:300px; object-fit:cover;">
                                    </div>
                                    <div class="col-md-7">
                                        <p class="mb-2"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                                        <p class="mb-2"><strong>Precio:</strong>
                                            ${{ number_format($producto->precio, 0, ',', '.') }}</p>
                                        @if ($producto->stock !== null)
                                            <p class="mb-2"><strong>Stock:</strong>
                                                {{ $producto->stock > 0 ? $producto->stock : 'No disponible' }}</p>
                                        @endif
                                        <a href="https://wa.me/573232386890?text=Hola,%20quiero%20comprar%20el%20Producto%20{{ urlencode($producto->nombre) }}"
                                           target="_blank"
                                           class="btn btn-success btn-block mt-3"
                                           aria-label="Cotizar ahora por WhatsApp">
                                            <i class="fa fa-whatsapp"></i> Pedir ahora
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">CATÁLOGO</h6>
                    <h1 class="mb-4">PROYECTOS</h1>
                </div>
            </div>

            <div class="row pb-3">
                @foreach ($proyectos as $proyecto)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100 transition-hover" style="cursor:pointer;"
                            data-toggle="modal" data-target="#proyectoModal{{ $proyecto->id }}">
                            <img class="card-img-top img-fluid rounded-top"
                                src="{{ asset('storage/' . ($proyecto->imagen ?? 'ProyectosDefault.png')) }}"
                                alt="{{ $proyecto->nombre }}" style="object-fit:cover; height:220px;">
                            <div class="card-body bg-white p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title text-primary font-weight-bold text-truncate"
                                        title="{{ $proyecto->nombre }}">{{ $proyecto->nombre }}</h5>
                                    <p class="card-text text-secondary small" style="min-height:60px;">
                                        {{ Str::limit($proyecto->descripcion, 80) }}</p>
                                </div>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal"
                                        data-target="#proyectoModal{{ $proyecto->id }}">
                                        Ver detalles
                                    </button>
                                    @if ($proyecto->enlace)
                                        <a href="{{ $proyecto->enlace }}" target="_blank" class="btn btn-primary btn-sm"
                                            aria-label="Ver proyecto {{ $proyecto->nombre }}">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Detalles Proyecto -->
                    <div class="modal fade" id="proyectoModal{{ $proyecto->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="proyectoModalLabel{{ $proyecto->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="proyectoModalLabel{{ $proyecto->id }}">
                                        {{ $proyecto->nombre }}</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal"
                                        aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body d-flex flex-wrap">
                                    <div class="col-md-6 p-0 mb-3 mb-md-0">
                                        <img src="{{ asset('storage/' . ($proyecto->imagen ?? 'ProyectosDefault.png')) }}"
                                            alt="{{ $proyecto->nombre }}" class="img-fluid rounded"
                                            style="max-height:350px; object-fit:cover;">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
                                        @if ($proyecto->Tiempo_construccion)
                                            <p class="mb-2"><strong>Tiempo de construcción:</strong>
                                                {{ $proyecto->Tiempo_construccion }}</p>
                                        @endif
                                        <a href="https://wa.me/573175151701?text=Hola,%20quiero%saber%20mas%20de%20el%20proyecto%20{{ urlencode($proyecto->nombre) }}"
                                           target="_blank"
                                           class="btn btn-success btn-block mt-3"
                                           aria-label="Cotizar ahora por WhatsApp">
                                            <i class="fa fa-whatsapp"></i> Cotizar ahora
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach

                <style>
                    .transition-hover:hover {
                        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15) !important;
                        transform: translateY(-4px) scale(1.02);
                        transition: all 0.2s;
                    }

                    .card-title,
                    .modal-title {
                        letter-spacing: 0.5px;
                    }

                    .modal-content {
                        border-radius: 1rem;
                    }
                </style>


            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
