@extends('MaderAlpes.layouts.layoutDasboard')



@section('contenido')
    <div class="container ">

        <div class="row align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 col">Productos</h1>
            <button type="button" class="col-2 m btn btn-success" data-bs-toggle="modal"
                data-bs-target="#ModalAgregarProducto">Agregar
                Producto</button>
        </div>
        <!-- Estructura del Modal agregar producto -->


        <div class="modal fade" id="ModalAgregarProducto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header py-3 bg-primary text-white">
                        <h5 class="modal-title m-0 fw-bold" id="modalLabel">Información del Producto</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <!-- Alert for errors -->
                        <div class="alert alert-danger d-none" id="errorAlert">
                            <ul class="mb-0" id="errorList">
                                <!-- Error messages will be added here -->
                            </ul>
                        </div>

                        <form id="productForm" action="{{ route('productos.store') }}" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <div class="row mb-3">
                                <!-- Nombre del Producto -->
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre del Producto</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el nombre del producto.
                                    </div>
                                </div>

                                <!-- Categoría -->
                                <div class="col-md-6 mb-3">
                                    <label for="categoria" class="form-label">Categoría</label>
                                    <select class="form-select" id="categoria" name="categoria" required>
                                        <option value="" selected disabled>Seleccione una categoría</option>
                                        <option value="Hogar">Hogar</option>
                                        <option value="Cocina">Cocina</option>
                                        <option value="Baño">Baño</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione una categoría.
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- Precio -->
                                <div class="col-md-6 mb-3">
                                    <label for="precio" class="form-label">Precio ($)</label>
                                    <input type="number" step="0.01" class="form-control" id="precio" name="precio"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un precio válido.
                                    </div>
                                </div>

                                <!-- Imagen -->
                                <div class="col-md-6 mb-3">
                                    <label for="imagen" class="form-label">Imagen del Producto</label>
                                    <input class="form-control" type="file" id="imagen" name="imagen">
                                    <div class="invalid-feedback">
                                        Por favor seleccione una imagen válida.
                                    </div>
                                </div>
                            </div>

                            <!-- Descripción -->
                            <div class="mb-4">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                            </div>

                            <!-- Buttons in Modal Footer -->
                            <div class="modal-footer d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <button type="reset" class="btn btn-secondary me-md-2">
                                    <i class="bi bi-x-circle me-1"></i> Limpiar
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i> Guardar Producto
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Fin del Modal agregar producto -->

    {{-- Tabla Productos --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-4 fw-light" style="color: #000000;">
                    <i class="fas fa-table me-2"></i>Productos
                </h2>

                <div class="table-responsive">
                    <table class="table elegant-table table-striped table-hover" id="tabla-productos">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="fw-bold">{{ $producto->id }}</td>
                                    <td>
                                        {{ $producto->nombre }}
                                    </td>
                                    <td>{{ $producto->categoria }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>
                                        {{ $producto->descripcion }}
                                    <td>
                                        <button class="action-btn btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#VistaProducto{{ $producto->id }}">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>
                                        <button class="action-btn btn btn-sm btn-outline-success " data-bs-toggle="modal"
                                            data-bs-target="#ModalEditarProducto{{ $producto->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="action-btn btn btn-sm btn-outline-danger"  data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarProducto{{ $producto->id }}">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="VistaProducto{{ $producto->id }}" tabindex="-1"
                                    aria-labelledby="modalProductoLabel{{ $producto->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h5 class="modal-title fw-bold"
                                                    id="modalProductoLabel{{ $producto->id }}">Detalles del Producto</h5>
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
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEditarProducto{{ $producto->id }}">
                                                    <i class="bi bi-pencil-square me-1"></i>Editar Producto
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal para Editar Producto -->
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
                                            {{--   {{ route('productos.update', $producto->id) }} --}}
                                            <form action="" method="POST" enctype="multipart/form-data"
                                                class="needs-validation" novalidate>
                                                @csrf
                                                {{-- @method('PUT') --}}

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
                                                {{-- {{ route('productos.destroy', $producto->id) }} --}}
                                                <form action="#"
                                                    method="POST">
                                                    @csrf
                                                    {{-- @method('DELETE') --}}
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
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
