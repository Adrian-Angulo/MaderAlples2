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

            </div>
        </div>

        <!-- Contenedor principal de la tabla -->
        <div class="card card-dashboard">
            <div class="card-body p-0">
                <!-- Barra de filtros/búsqueda -->
                <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <span class="text-muted small">Categorías disponibles</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <form action="{{ route('categorias.store') }}" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="nombre" class="form-control "
                                        placeholder="Agregar categoria" aria-label="Recipient’s username"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                            class="bi bi-send"></i></button>
                                </div>
                            </form>

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
                                <th style="width: 120px;" class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td class="fw-bold text-muted">#{{ $categoria->id }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div>
                                                <h6 class="mb-0 fw-semibold">{{ $categoria->nombre }}</h6>
                                                <small class="text-muted">Creada: {{-- {{ $categoria->created_at->format('d/m/Y') }} --}}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">

                                            <button class="btn-action btn btn-outline-danger" title="Eliminar categoría"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEliminarCategoria{{ $categoria->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-warning" title="Eliminar categoría"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalEditarCategoria{{ $categoria->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>



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
                                                    <h4 class="text-danger fw-bold">¿Está seguro de eliminar esta
                                                        categoría?
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
                                                            <p class="mb-0">Esta categoría tiene
                                                                <strong>{{ $categoria->productos_count }}
                                                                    productos</strong>
                                                                asociados.
                                                                Si elimina esta categoría, esos productos quedarán sin
                                                                categoría.
                                                            </p>
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
                                                                            class="bi bi-box-seam me-1"></i>{{ $categoria->productos_count }}
                                                                        productos</span>
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
                                                <form action="{{-- {{ route('categorias.destroy', $categoria->id) }} --}}" method="POST">
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
                <form id="categoriaForm" action="#" method="POST" enctype="multipart/form-data"
                    class="needs-validation" novalidate>
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


@endsection
