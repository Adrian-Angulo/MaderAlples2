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
                            <img class="card-img-top img-fluid rounded-top" src="{{ asset('storage/' . ($producto->imagen ?? 'Productos1Maderalpes.png')) }}" alt="{{ $producto->nombre }}" style="object-fit:cover; height:220px;">
                            <div class="card-body bg-white p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title text-primary font-weight-bold text-truncate" title="{{ $producto->nombre }}">{{ $producto->nombre }}</h5>
                                    <p class="card-text text-secondary small" style="min-height:60px;">{{ Str::limit($producto->descripcion, 80) }}</p>
                                </div>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#productoModal{{ $producto->id }}">
                                        Ver detalles
                                    </button>
                                    <form action="{{-- {{ route('carrito.agregar', $producto->id) }} --}}" method="POST" class="m-0 p-0">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm" aria-label="Agregar {{ $producto->nombre }} al carrito">
                                            <i class="fa fa-cart-plus"></i> Agregar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de Detalles del Producto -->
                    <div class="modal fade" id="productoModal{{ $producto->id }}" tabindex="-1" role="dialog" aria-labelledby="productoModalLabel{{ $producto->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="productoModalLabel{{ $producto->id }}">{{ $producto->nombre }}</h5>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body d-flex flex-wrap">
                                    <div class="col-md-5 p-0 mb-3 mb-md-0">
                                        <img src="{{ asset('storage/' . ($producto->imagen ?? 'Productos1Maderalpes.png')) }}" alt="{{ $producto->nombre }}" class="img-fluid rounded" style="max-height:300px; object-fit:cover;">
                                    </div>
                                    <div class="col-md-7">
                                        <p class="mb-2"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                                        <p class="mb-2"><strong>Precio:</strong> ${{ number_format($producto->precio, 0, ',', '.') }}</p>
                                        @if($producto->stock !== null)
                                            <p class="mb-2"><strong>Stock:</strong> {{ $producto->stock > 0 ? $producto->stock : 'No disponible' }}</p>
                                        @endif
                                        <form action="{{-- {{ route('carrito.agregar', $producto->id) }} --}}" method="POST" class="mt-3">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-block" aria-label="Agregar {{ $producto->nombre }} al carrito">
                                                <i class="fa fa-cart-plus"></i> Agregar al carrito
                                            </button>
                                        </form>
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
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos1.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO1</h5>
                            </div>
                            <p>Imagen de un proyecto arquitectónico que muestra un espacio moderno con techos altos,
                                 iluminación natural y estructura de madera expuesta. Da una sensación cálida y abierta,
                                  ideal para entornos residenciales o institucionales.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos1Maderalpes.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO2</h5>
                            </div>
                            <p>Diseño interior tipo oficina o sala común con detalles en madera y líneas limpias. 
                                La distribución del espacio favorece el trabajo colaborativo o el descanso en un ambiente sofisticado.</p>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos2.1Maderalpes.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO3</h5>
                            </div>
                            <p>Renderizado interior con acabados en madera clara, mobiliario moderno y amplios ventanales.
                                El diseño transmite elegancia, funcionalidad y conexión con la naturaleza.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos2.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO4</h5>
                            </div>
                            <p>Vista exterior de un edificio contemporáneo con fachada en tonos claros, elementos de madera y 
                                grandes ventanales. Se resalta la integración con el entorno y el uso de materiales naturales.                            </p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos3.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO5</h5>
                            </div>
                            <p>Diseño de interior que mezcla lo moderno y lo rústico, con uso extensivo de madera, iluminación estratégica y decoración minimalista. Transmite una sensación de bienestar y confort.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos3.1Maderalpes.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO6</h5>
                            </div>
                            <p>Imagen de interior con mobiliario sobrio y elegante, muros con textura y una iluminación cálida. El estilo es refinado y acogedor, ideal para espacios de descanso o conversación.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos4.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO7</h5>
                            </div>
                            <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="img/Proyectos5.png" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href=""><i class="fa fa-link"></i></a>
                                <h5 class="m-0 ml-3 text-truncate">PROYECTO8</h5>
                            </div>
                            <p>Render de un espacio abierto con ventanales altos, mobiliario moderno y estructura en madera. El diseño sugiere sostenibilidad, amplitud y conexión con el exterior.</p>
                            <!-- <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection