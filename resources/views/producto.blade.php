@extends('MaderAlpes.layouts.layoutDasboard')



@section('contenido')
    <div class="container-fluid py-4">
        <!-- Header con título y botón de agregar -->
        <div class="card card-dashboard mb-4">
            <div class="header-container d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="bi bi-box-seam me-2"></i>Gestión de Productos
                    </h4>
                    <p class="text-muted mb-0 small">Administre su inventario de productos</p>
                </div>
                <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#ModalAgregarProducto">
                    <i class="bi bi-plus-lg me-2"></i>Agregar Producto
                </button>
            </div>
        </div>

        <!-- Contenedor principal de la tabla -->
        <div class="card card-dashboard">
            <div class="card-body p-0">
                <!-- Barra de filtros/búsqueda -->
                <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-primary rounded-pill me-2">{{ count($productos) }}</span>
                        <span class="text-muted small">Productos en inventario</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="searchInput"
                                placeholder="Buscar productos...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de productos -->
                <div class="table-responsive">
                    <table class="table table-technical mb-0" id="tabla-productos">
                        <thead>
                            <tr>
                                <th style="width: 60px;">ID</th>
                                <th style="width: 25%;">PRODUCTO</th>
                                <th style="width: 15%;">CATEGORÍA</th>
                                <th style="width: 15%;">PRECIO</th>
                                <th>DESCRIPCIÓN</th>
                                <th style="width: 120px;" class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="fw-bold text-muted">#{{ $producto->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if ($producto->imagen)
                                                <div class="me-3" style="width: 40px; height: 40px;">
                                                    <img src="{{ asset('storage/' . $producto->imagen) }}"
                                                        alt="{{ $producto->nombre }}" class="img-fluid rounded"
                                                        style="width: 40px; height: 40px; object-fit: cover;">
                                                </div>
                                            @else
                                                <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    <i class="bi bi-image text-secondary" style="font-size: 1.2rem;"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <h6 class="mb-0 fw-semibold">{{ $producto->nombre }}</h6>
                                                <small class="text-muted">ID: #{{ $producto->id }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge badge-outline badge-outline-primary">{{ $producto->categoria }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="fw-semibold text-success">${{ number_format($producto->precio, 2) }}</span>
                                    </td>
                                    <td>
                                        <div class="text-truncate-2" style="max-width: 250px;">
                                            {{ $producto->descripcion ?: 'Sin descripción' }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                                data-bs-toggle="modal" data-bs-target="#VistaProducto{{ $producto->id }}">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-success" title="Editar producto"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEditarProducto{{ $producto->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-danger" title="Eliminar producto"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEliminarProducto{{ $producto->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                {{-- Modal ver productos --}}
                                <div class="modal fade" id="VistaProducto{{ $producto->id }}" tabindex="-1"
                                    aria-labelledby="modalProductoLabel{{ $producto->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h5 class="modal-title fw-bold" id="modalProductoLabel{{ $producto->id }}">
                                                    Detalles del Producto</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="row g-0">
                                                    <!-- Columna de imagen -->
                                                    <div
                                                        class="col-md-5 bg-light d-flex align-items-center justify-content-center p-3">
                                                        @if ($producto->imagen)
                                                            <img src="{{ asset('storage/' . $producto->imagen) }}"
                                                                class="img-fluid rounded" alt="{{ $producto->nombre }}">
                                                        @else
                                                            <div class="text-center p-5 w-100">
                                                                <i class="bi bi-image text-secondary"
                                                                    style="font-size: 5rem;"></i>
                                                                <p class="text-muted mt-2">Sin imagen disponible</p>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <!-- Columna de información -->
                                                    <div class="col-md-7">
                                                        <div class="card-body p-4">
                                                            <h3 class="card-title fw-bold text-primary mb-3">
                                                                {{ $producto->nombre }}</h3>

                                                            <div class="row mb-3">
                                                                <div class="col-6">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="badge bg-light text-dark me-2">
                                                                            <i
                                                                                class="bi bi-tag-fill text-primary me-1"></i>
                                                                        </span>
                                                                        <div>
                                                                            <small
                                                                                class="text-muted d-block">Categoría</small>
                                                                            <span
                                                                                class="fw-medium">{{ $producto->categoria }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="badge bg-light text-dark me-2">
                                                                            <i
                                                                                class="bi bi-currency-dollar text-success me-1"></i>
                                                                        </span>
                                                                        <div>
                                                                            <small
                                                                                class="text-muted d-block">Precio</small>
                                                                            <span
                                                                                class="fw-bold text-success">${{ number_format($producto->precio, 2) }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <h6 class="fw-bold mb-2">
                                                                    <i class="bi bi-info-circle me-1"></i> Descripción
                                                                </h6>
                                                                <div class="p-3 bg-light rounded">
                                                                    @if ($producto->descripcion)
                                                                        <p class="mb-0">{{ $producto->descripcion }}</p>
                                                                    @else
                                                                        <p class="text-muted mb-0">No hay descripción
                                                                            disponible para este producto.</p>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="d-flex justify-content-between align-items-center mt-4">
                                                                <span class="badge bg-secondary">
                                                                    <i class="bi bi-hash me-1"></i>ID: {{ $producto->id }}
                                                                </span>
                                                                <small class="text-muted">
                                                                    <i class="bi bi-clock me-1"></i>Creado:
                                                                    {{ $producto->created_at->format('d/m/Y') }}
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bi bi-x-circle me-1"></i>Cerrar
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Fin Modal ver productos --}}


                                {{-- Moda para editar productos --}}
                                <div class="modal fade" id="ModalEditarProducto{{ $producto->id }}" tabindex="-1"
                                    aria-labelledby="editarProductoLabel{{ $producto->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title fw-bold"
                                                    id="editarProductoLabel{{ $producto->id }}">
                                                    <i class="bi bi-pencil-square me-2"></i>Editar Producto
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            
                                            <form action="{{ route('productos.update', $producto) }}" method="POST"
                                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body p-4">
                                                    <div class="row mb-4">
                                                        <!-- Información actual -->
                                                        <div class="col-md-12 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                @if ($producto->imagen)
                                                                    <img src="{{ asset('storage/' . $producto->imagen) }}"
                                                                        alt="{{ $producto->nombre }}"
                                                                        class="img-thumbnail me-3"
                                                                        style="width: 60px; height: 60px; object-fit: cover;">
                                                                @else
                                                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                                        style="width: 60px; height: 60px;">
                                                                        <i class="bi bi-image text-secondary"></i>
                                                                    </div>
                                                                @endif
                                                                <div>
                                                                    <h6 class="fw-bold mb-0">{{ $producto->nombre }}</h6>
                                                                    <small class="text-muted">ID: {{ $producto->id }} |
                                                                        Categoría: {{ $producto->categoria }}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <!-- Nombre del Producto -->
                                                        <div class="col-md-6 mb-3">
                                                            <label for="nombre{{ $producto->id }}"
                                                                class="form-label fw-medium">
                                                                <i class="bi bi-tag me-1 text-primary"></i>Nombre del
                                                                Producto
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                id="nombre{{ $producto->id }}" name="nombre"
                                                                value="{{ $producto->nombre }}" required>
                                                            <div class="invalid-feedback">
                                                                Por favor ingrese el nombre del producto.
                                                            </div>
                                                        </div>

                                                        <!-- Categoría -->
                                                        <div class="col-md-6 mb-3">
                                                            <label for="categoria{{ $producto->id }}"
                                                                class="form-label fw-medium">
                                                                <i class="bi bi-bookmark me-1 text-primary"></i>Categoría
                                                            </label>
                                                            <select class="form-select" id="categoria{{ $producto->id }}"
                                                                name="categoria" required>
                                                                <option value="" disabled>Seleccione una categoría
                                                                </option>
                                                                <option value="Hogar"
                                                                    {{ $producto->categoria == 'Hogar' ? 'selected' : '' }}>
                                                                    Hogar</option>
                                                                <option value="Cocina"
                                                                    {{ $producto->categoria == 'Cocina' ? 'selected' : '' }}>
                                                                    Cocina</option>
                                                                <option value="Baño"
                                                                    {{ $producto->categoria == 'Baño' ? 'selected' : '' }}>
                                                                    Baño</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Por favor seleccione una categoría.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <!-- Precio -->
                                                        <div class="col-md-6 mb-3">
                                                            <label for="precio{{ $producto->id }}"
                                                                class="form-label fw-medium">
                                                                <i
                                                                    class="bi bi-currency-dollar me-1 text-primary"></i>Precio
                                                                ($)
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-text">$</span>
                                                                <input type="number" step="0.01" min="0"
                                                                    class="form-control" id="precio{{ $producto->id }}"
                                                                    name="precio" value="{{ $producto->precio }}"
                                                                    required>
                                                                <div class="invalid-feedback">
                                                                    Por favor ingrese un precio válido.
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Imagen -->
                                                        <div class="col-md-6 mb-3">
                                                            <label for="imagen{{ $producto->id }}"
                                                                class="form-label fw-medium">
                                                                <i class="bi bi-image me-1 text-primary"></i>Imagen del
                                                                Producto
                                                            </label>
                                                            <input class="form-control" type="file"
                                                                id="imagen{{ $producto->id }}" name="imagen"
                                                                accept="image/*"
                                                                onchange="previewEditImage(this, {{ $producto->id }})">
                                                            <div class="invalid-feedback">
                                                                Por favor seleccione una imagen válida.
                                                            </div>

                                                            <div class="d-flex align-items-center mt-2">
                                                                <div id="currentImageContainer{{ $producto->id }}"
                                                                    class="me-3"
                                                                    style="{{ $producto->imagen ? '' : 'display: none;' }}">
                                                                    <small class="d-block text-muted mb-1">Actual:</small>
                                                                    <div class="position-relative">
                                                                        <img src="{{ $producto->imagen ? asset('storage/' . $producto->imagen) : '' }}"
                                                                            alt="Imagen actual" class="img-thumbnail"
                                                                            style="width: 70px; height: 70px; object-fit: cover;">
                                                                    </div>
                                                                </div>
                                                                <div id="newImageContainer{{ $producto->id }}"
                                                                    style="display: none;">
                                                                    <small class="d-block text-muted mb-1">Nueva:</small>
                                                                    <div class="position-relative">
                                                                        <img id="previewEdit{{ $producto->id }}"
                                                                            src="#" alt="Vista previa"
                                                                            class="img-thumbnail"
                                                                            style="width: 70px; height: 70px; object-fit: cover;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Descripción -->
                                                    <div class="mb-3">
                                                        <label for="descripcion{{ $producto->id }}"
                                                            class="form-label fw-medium">
                                                            <i
                                                                class="bi bi-text-paragraph me-1 text-primary"></i>Descripción
                                                        </label>
                                                        <textarea class="form-control" id="descripcion{{ $producto->id }}" name="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="modal-footer bg-light">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bi bi-x-circle me-1"></i>Cancelar
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-save me-1"></i>Guardar Cambios
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- fin modal para editar productos --}}

                                <!-- Modal para Eliminar Producto -->
                                <div class="modal fade" id="ModalEliminarProducto{{ $producto->id }}" tabindex="-1"
                                    aria-labelledby="eliminarProductoLabel{{ $producto->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title fw-bold"
                                                    id="eliminarProductoLabel{{ $producto->id }}">
                                                    <i class="bi bi-exclamation-triangle-fill me-2"></i>Confirmar
                                                    Eliminación
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="text-center mb-4">
                                                    <div class="display-1 text-danger mb-3">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </div>
                                                    <h4 class="text-danger fw-bold">¿Está seguro de eliminar este producto?
                                                    </h4>
                                                    <p class="text-muted">Esta acción no se puede deshacer.</p>
                                                </div>

                                                <div class="card border-danger mb-3">
                                                    <div class="card-body p-3">
                                                        <div class="d-flex align-items-center">
                                                            @if ($producto->imagen)
                                                                <img src="{{ asset('storage/' . $producto->imagen) }}"
                                                                    alt="{{ $producto->nombre }}"
                                                                    class="img-thumbnail me-3"
                                                                    style="width: 60px; height: 60px; object-fit: cover;">
                                                            @else
                                                                <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                                    style="width: 60px; height: 60px;">
                                                                    <i class="bi bi-image text-secondary"></i>
                                                                </div>
                                                            @endif
                                                            <div>
                                                                <h6 class="fw-bold mb-0">{{ $producto->nombre }}</h6>
                                                                <div class="small text-muted">
                                                                    <span class="me-2"><i
                                                                            class="bi bi-tag-fill me-1"></i>{{ $producto->categoria }}</span>
                                                                    <span><i
                                                                            class="bi bi-currency-dollar me-1"></i>{{ number_format($producto->precio, 2) }}</span>
                                                                </div>
                                                                <div class="small text-muted">
                                                                    <span><i class="bi bi-hash me-1"></i>ID:
                                                                        {{ $producto->id }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-light">
                                                {{-- Formulario para eliminar  --}}
                                                <form action="{{ route('productos.destroy', $producto) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bi bi-x-circle me-1"></i>Cancelar
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash3-fill me-1"></i>Eliminar Producto
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fin Modal para Eliminar Producto -->


                                {{--  <!-- Modales para cada producto (Ver, Editar, Eliminar) -->
                            @include('MaderAlpes.productos.modals.ver', ['producto' => $producto])
                            @include('MaderAlpes.productos.modals.editar', ['producto' => $producto])
                            @include('MaderAlpes.productos.modals.eliminar', ['producto' => $producto]) --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Paginación o mensaje si no hay productos -->
                @if (count($productos) > 0)
                    <div class="d-flex justify-content-between align-items-center p-3 border-top bg-light">
                        <div class="small text-muted">
                            Mostrando {{ count($productos) }} producto(s)
                        </div>
                        <nav aria-label="Page navigation">
                            <!-- Aquí iría la paginación si la tienes implementada -->
                        </nav>
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="text-muted mb-3">
                            <i class="bi bi-inbox" style="font-size: 3rem;"></i>
                        </div>
                        <h5>No hay productos disponibles</h5>
                        <p class="text-muted">Comience agregando un nuevo producto</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAgregarProducto">
                            <i class="bi bi-plus-lg me-1"></i> Agregar Producto
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Producto -->
    <div class="modal fade" id="ModalAgregarProducto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-header-technical bg-primary text-white">
                    <h5 class="modal-title m-0 fw-bold" id="modalLabel">
                        <i class="bi bi-plus-circle me-2"></i>Agregar Nuevo Producto
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="productForm" action="{{ route('productos.store') }}" method="POST"
                    enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body p-4">
                        <!-- Alert for errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <i class="bi bi-exclamation-triangle-fill fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="alert-heading fw-bold mb-1">Error al guardar el producto</h6>
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row g-3">
                            <!-- Información básica -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-info-circle me-1"></i>Información Básica
                                        </h6>

                                        <div class="row g-3">
                                            <!-- Nombre del Producto -->
                                            <div class="col-md-6">
                                                <label for="nombre" class="form-label fw-medium">Nombre del
                                                    Producto</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Por favor ingrese el nombre del producto.
                                                </div>
                                            </div>

                                            <!-- Categoría -->
                                            <div class="col-md-6">
                                                <label for="categoria" class="form-label fw-medium">Categoría</label>
                                                <select class="form-select" id="categoria" name="categoria" required>
                                                    <option value="" selected disabled>Seleccione una categoría
                                                    </option>
                                                    <option value="Hogar">Hogar</option>
                                                    <option value="Cocina">Cocina</option>
                                                    <option value="Baño">Baño</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Por favor seleccione una categoría.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Precio e Imagen -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-tag me-1"></i>Precio y Multimedia
                                        </h6>

                                        <div class="row g-3">
                                            <!-- Precio -->
                                            <div class="col-md-6">
                                                <label for="precio" class="form-label fw-medium">Precio ($)</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" step="0.01" min="0"
                                                        class="form-control" id="precio" name="precio" required>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Por favor ingrese un precio válido.
                                                </div>
                                            </div>

                                            <!-- Imagen -->
                                            <div class="col-md-6">
                                                <label for="imagen" class="form-label fw-medium">Imagen del
                                                    Producto</label>
                                                <input class="form-control" type="file" id="imagen" name="imagen"
                                                    accept="image/*" onchange="previewImage(this, 'previewNew')">
                                                <div class="invalid-feedback">
                                                    Por favor seleccione una imagen válida.
                                                </div>
                                                <div class="mt-2" id="imagePreviewContainer" style="display: none;">
                                                    <img id="previewNew" src="#" alt="Vista previa"
                                                        class="img-thumbnail" style="max-height: 100px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Descripción -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-text-paragraph me-1"></i>Descripción
                                        </h6>

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="descripcion" class="form-label fw-medium">Descripción del
                                                    Producto</label>
                                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                                    placeholder="Ingrese una descripción detallada del producto..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer modal-footer-technical">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Cancelar
                        </button>
                        <button type="reset" class="btn btn-outline-primary me-2"
                            onclick="resetImagePreview('previewNew', 'imagePreviewContainer')">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>Restablecer
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i>Guardar Producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
