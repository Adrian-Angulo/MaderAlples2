@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <div class="container-fluid py-4">
        <!-- Header con título y botón de agregar -->
        <div class="card card-dashboard mb-4">
            <div class="header-container d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="bi bi-collection me-2"></i>Gestión de Categorías
                    </h4>
                    <p class="text-muted mb-0 small">Administre las categorías de sus productos</p>
                </div>
                <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#ModalAgregarCategoria">
                    <i class="bi bi-plus-lg me-2"></i>Agregar Categoría
                </button>
            </div>
        </div>

        <!-- Contenedor principal de la tabla -->
        <div class="card card-dashboard">
            <div class="card-body p-0">
                <!-- Barra de filtros/búsqueda -->
                <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        {{-- {{ count($categorias) }} --}}
                        <span class="badge bg-primary rounded-pill me-2">3</span>
                        <span class="text-muted small">Categorías disponibles</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="searchInput"
                                placeholder="Buscar categorías...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de categorías -->
                <div class="table-responsive">
                    <table class="table table-technical mb-0" id="tabla-categorias">
                        <thead>
                            <tr>
                                <th style="width: 60px;">ID</th>
                                <th style="width: 25%;">CATEGORÍA</th>
                                <th style="width: 15%;">PRODUCTOS</th>
                                <th>DESCRIPCIÓN</th>
                                <th style="width: 15%;">ESTADO</th>
                                <th style="width: 120px;" class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                           {{--  @foreach ($categorias as $categoria)
                                <tr>
                                    <td class="fw-bold text-muted">#{{ $categoria->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if ($categoria->icono)
                                                <div class="me-3" style="width: 40px; height: 40px;">
                                                    <img src="{{ asset('storage/' . $categoria->icono) }}"
                                                        alt="{{ $categoria->nombre }}" class="img-fluid rounded"
                                                        style="width: 40px; height: 40px; object-fit: cover;">
                                                </div>
                                            @else
                                                <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                    style="width: 40px; height: 40px;">
                                                    <i class="bi bi-collection text-secondary" style="font-size: 1.2rem;"></i>
                                                </div>
                                            @endif
                                            <div>
                                                <h6 class="mb-0 fw-semibold">{{ $categoria->nombre }}</h6>
                                                <small class="text-muted">Creada: {{ $categoria->created_at->format('d/m/Y') }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">{{ $categoria->productos_count }} productos</span>
                                    </td>
                                    <td>
                                        <div class="text-truncate-2" style="max-width: 250px;">
                                            {{ $categoria->descripcion ?: 'Sin descripción' }}
                                        </div>
                                    </td>
                                    <td>
                                        @if($categoria->activo)
                                            <span class="badge bg-success">Activa</span>
                                        @else
                                            <span class="badge bg-danger">Inactiva</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                                data-bs-toggle="modal" data-bs-target="#VistaCategoria{{ $categoria->id }}">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-success" title="Editar categoría"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEditarCategoria{{ $categoria->id }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-danger" title="Eliminar categoría"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEliminarCategoria{{ $categoria->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal ver categoría -->
                                <div class="modal fade" id="VistaCategoria{{ $categoria->id }}" tabindex="-1"
                                    aria-labelledby="modalCategoriaLabel{{ $categoria->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h5 class="modal-title fw-bold" id="modalCategoriaLabel{{ $categoria->id }}">
                                                    Detalles de la Categoría</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <div class="text-center mb-4">
                                                    @if ($categoria->icono)
                                                        <img src="{{ asset('storage/' . $categoria->icono) }}"
                                                            class="img-fluid rounded mb-3" alt="{{ $categoria->nombre }}"
                                                            style="max-width: 100px; max-height: 100px;">
                                                    @else
                                                        <div class="bg-light rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                                            style="width: 100px; height: 100px;">
                                                            <i class="bi bi-collection text-secondary fs-1"></i>
                                                        </div>
                                                    @endif
                                                    <h3 class="fw-bold text-primary">{{ $categoria->nombre }}</h3>
                                                    <div class="badge bg-info fs-6 mb-3">{{ $categoria->productos_count }} productos</div>
                                                </div>

                                                <div class="card bg-light mb-3">
                                                    <div class="card-body">
                                                        <h6 class="fw-bold mb-2">
                                                            <i class="bi bi-info-circle me-1"></i> Descripción
                                                        </h6>
                                                        @if ($categoria->descripcion)
                                                            <p class="mb-0">{{ $categoria->descripcion }}</p>
                                                        @else
                                                            <p class="text-muted mb-0">No hay descripción disponible para esta categoría.</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-light text-dark me-2">
                                                                <i class="bi bi-calendar-check text-primary me-1"></i>
                                                            </span>
                                                            <div>
                                                                <small class="text-muted d-block">Fecha de creación</small>
                                                                <span class="fw-medium">{{ $categoria->created_at->format('d/m/Y') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <span class="badge bg-light text-dark me-2">
                                                                <i class="bi bi-toggle-on text-primary me-1"></i>
                                                            </span>
                                                            <div>
                                                                <small class="text-muted d-block">Estado</small>
                                                                @if($categoria->activo)
                                                                    <span class="fw-medium text-success">Activa</span>
                                                                @else
                                                                    <span class="fw-medium text-danger">Inactiva</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <span class="badge bg-secondary">
                                                        <i class="bi bi-hash me-1"></i>ID: {{ $categoria->id }}
                                                    </span>
                                                    <small class="text-muted">
                                                        <i class="bi bi-clock me-1"></i>Última actualización:
                                                        {{ $categoria->updated_at->format('d/m/Y') }}
                                                    </small>
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
                                <!-- Fin Modal ver categoría -->

                                <!-- Modal para editar categoría -->
                                <div class="modal fade" id="ModalEditarCategoria{{ $categoria->id }}" tabindex="-1"
                                    aria-labelledby="editarCategoriaLabel{{ $categoria->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title fw-bold"
                                                    id="editarCategoriaLabel{{ $categoria->id }}">
                                                    <i class="bi bi-pencil-square me-2"></i>Editar Categoría
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST"
                                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-body p-4">
                                                    <div class="row mb-4">
                                                        <!-- Información actual -->
                                                        <div class="col-md-12 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                @if ($categoria->icono)
                                                                    <img src="{{ asset('storage/' . $categoria->icono) }}"
                                                                        alt="{{ $categoria->nombre }}"
                                                                        class="img-thumbnail me-3"
                                                                        style="width: 60px; height: 60px; object-fit: cover;">
                                                                @else
                                                                    <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                                        style="width: 60px; height: 60px;">
                                                                        <i class="bi bi-collection text-secondary"></i>
                                                                    </div>
                                                                @endif
                                                                <div>
                                                                    <h6 class="fw-bold mb-0">{{ $categoria->nombre }}</h6>
                                                                    <small class="text-muted">ID: {{ $categoria->id }} | 
                                                                        Productos: {{ $categoria->productos_count }}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Nombre de la Categoría -->
                                                    <div class="mb-3">
                                                        <label for="nombre{{ $categoria->id }}"
                                                            class="form-label fw-medium">
                                                            <i class="bi bi-tag me-1 text-primary"></i>Nombre de la
                                                            Categoría
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            id="nombre{{ $categoria->id }}" name="nombre"
                                                            value="{{ $categoria->nombre }}" required>
                                                        <div class="invalid-feedback">
                                                            Por favor ingrese el nombre de la categoría.
                                                        </div>
                                                    </div>

                                                    <!-- Descripción -->
                                                    <div class="mb-3">
                                                        <label for="descripcion{{ $categoria->id }}"
                                                            class="form-label fw-medium">
                                                            <i class="bi bi-text-paragraph me-1 text-primary"></i>Descripción
                                                        </label>
                                                        <textarea class="form-control" id="descripcion{{ $categoria->id }}" name="descripcion" rows="3">{{ $categoria->descripcion }}</textarea>
                                                    </div>

                                                    <!-- Icono -->
                                                    <div class="mb-3">
                                                        <label for="icono{{ $categoria->id }}"
                                                            class="form-label fw-medium">
                                                            <i class="bi bi-image me-1 text-primary"></i>Icono de la
                                                            Categoría
                                                        </label>
                                                        <input class="form-control" type="file"
                                                            id="icono{{ $categoria->id }}" name="icono"
                                                            accept="image/*"
                                                            onchange="previewEditImage(this, {{ $categoria->id }})">
                                                        <div class="invalid-feedback">
                                                            Por favor seleccione una imagen válida.
                                                        </div>

                                                        <div class="d-flex align-items-center mt-2">
                                                            <div id="currentImageContainer{{ $categoria->id }}"
                                                                class="me-3"
                                                                style="{{ $categoria->icono ? '' : 'display: none;' }}">
                                                                <small class="d-block text-muted mb-1">Actual:</small>
                                                                <div class="position-relative">
                                                                    <img src="{{ $categoria->icono ? asset('storage/' . $categoria->icono) : '' }}"
                                                                        alt="Imagen actual" class="img-thumbnail"
                                                                        style="width: 70px; height: 70px; object-fit: cover;">
                                                                </div>
                                                            </div>
                                                            <div id="newImageContainer{{ $categoria->id }}"
                                                                style="display: none;">
                                                                <small class="d-block text-muted mb-1">Nueva:</small>
                                                                <div class="position-relative">
                                                                    <img id="previewEdit{{ $categoria->id }}"
                                                                        src="#" alt="Vista previa"
                                                                        class="img-thumbnail"
                                                                        style="width: 70px; height: 70px; object-fit: cover;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Estado -->
                                                    <div class="mb-3">
                                                        <label class="form-label fw-medium">
                                                            <i class="bi bi-toggle-on me-1 text-primary"></i>Estado
                                                        </label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" 
                                                                id="activo{{ $categoria->id }}" name="activo" 
                                                                {{ $categoria->activo ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="activo{{ $categoria->id }}">
                                                                Categoría activa
                                                            </label>
                                                        </div>
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
                                <!-- Fin modal para editar categoría -->

                                <!-- Modal para Eliminar Categoría -->
                                <div class="modal fade" id="ModalEliminarCategoria{{ $categoria->id }}" tabindex="-1"
                                    aria-labelledby="eliminarCategoriaLabel{{ $categoria->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title fw-bold"
                                                    id="eliminarCategoriaLabel{{ $categoria->id }}">
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
                                                    <h4 class="text-danger fw-bold">¿Está seguro de eliminar esta categoría?
                                                    </h4>
                                                    <p class="text-muted">Esta acción no se puede deshacer.</p>
                                                </div>

                                                <div class="alert alert-warning">
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <i class="bi bi-exclamation-triangle-fill fs-4"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="alert-heading fw-bold mb-1">Advertencia</h6>
                                                            <p class="mb-0">Esta categoría tiene <strong>{{ $categoria->productos_count }} productos</strong> asociados. 
                                                            Si elimina esta categoría, esos productos quedarán sin categoría.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card border-danger mb-3">
                                                    <div class="card-body p-3">
                                                        <div class="d-flex align-items-center">
                                                            @if ($categoria->icono)
                                                                <img src="{{ asset('storage/' . $categoria->icono) }}"
                                                                    alt="{{ $categoria->nombre }}"
                                                                    class="img-thumbnail me-3"
                                                                    style="width: 60px; height: 60px; object-fit: cover;">
                                                            @else
                                                                <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                                    style="width: 60px; height: 60px;">
                                                                    <i class="bi bi-collection text-secondary"></i>
                                                                </div>
                                                            @endif
                                                            <div>
                                                                <h6 class="fw-bold mb-0">{{ $categoria->nombre }}</h6>
                                                                <div class="small text-muted">
                                                                    <span class="me-2"><i
                                                                            class="bi bi-box-seam me-1"></i>{{ $categoria->productos_count }} productos</span>
                                                                </div>
                                                                <div class="small text-muted">
                                                                    <span><i class="bi bi-hash me-1"></i>ID:
                                                                        {{ $categoria->id }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-light">
                                                <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bi bi-x-circle me-1"></i>Cancelar
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash3-fill me-1"></i>Eliminar Categoría
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Modal para Eliminar Categoría -->
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>

                <!-- Paginación o mensaje si no hay categorías -->
                {{-- @if (count($categorias) > 0)
                    <div class="d-flex justify-content-between align-items-center p-3 border-top bg-light">
                        <div class="small text-muted">
                            Mostrando {{ count($categorias) }} categoría(s)
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
                        <h5>No hay categorías disponibles</h5>
                        <p class="text-muted">Comience agregando una nueva categoría</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAgregarCategoria">
                            <i class="bi bi-plus-lg me-1"></i> Agregar Categoría
                        </button>
                    </div>
                @endif --}}
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Categoría -->
    <div class="modal fade" id="ModalAgregarCategoria" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-technical bg-primary text-white">
                    <h5 class="modal-title m-0 fw-bold" id="modalLabel">
                        <i class="bi bi-plus-circle me-2"></i>Agregar Nueva Categoría
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                {{-- {{ route('categorias.store') }} --}}
                <form id="categoriaForm" action="#" method="POST"
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
                                        <h6 class="alert-heading fw-bold mb-1">Error al guardar la categoría</h6>
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3 text-muted">
                                    <i class="bi bi-info-circle me-1"></i>Información Básica
                                </h6>

                                <!-- Nombre de la Categoría -->
                                <div class="mb-3">
                                    <label for="nombre" class="form-label fw-medium">Nombre de la Categoría</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el nombre de la categoría.
                                    </div>
                                </div>

                                <!-- Descripción -->
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label fw-medium">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                        placeholder="Ingrese una descripción para la categoría..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-3 text-muted">
                                    <i class="bi bi-image me-1"></i>Icono y Estado
                                </h6>

                                <!-- Icono -->
                                <div class="mb-3">
                                    <label for="icono" class="form-label fw-medium">Icono de la Categoría</label>
                                    <input class="form-control" type="file" id="icono" name="icono"
                                        accept="image/*" onchange="previewImage(this, 'previewNew')">
                                    <div class="invalid-feedback">
                                        Por favor seleccione una imagen válida.
                                    </div>
                                    <div class="mt-2" id="imagePreviewContainer" style="display: none;">
                                        <img id="previewNew" src="#" alt="Vista previa"
                                            class="img-thumbnail" style="max-height: 100px;">
                                    </div>
                                </div>

                                <!-- Estado -->
                                <div class="mb-3">
                                    <label class="form-label fw-medium">Estado</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="activo" name="activo" checked>
                                        <label class="form-check-label" for="activo">
                                            Categoría activa
                                        </label>
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
                            <i class="bi bi-save me-1"></i>Guardar Categoría
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#tabla-categorias').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                },
                columnDefs: [{
                    orderable: false,
                    targets: 5
                }],
                order: [[0, 'asc']],
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'Todos']],
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"d-flex align-items-center"l><"d-flex"f>>t<"d-flex justify-content-between align-items-center mt-3"<"d-flex align-items-center"i><"d-flex"p>>',
            });
        });
    </script>
    @endpush
@endsection
