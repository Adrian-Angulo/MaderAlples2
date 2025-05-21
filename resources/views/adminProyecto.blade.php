@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
{{-- @php
    // Datos temporales de proyectos
    $proyectos = [
        (object)[
            'id' => 1,
            'nombre' => 'Casa Moderna',
            'descripcion' => 'Proyecto de vivienda moderna con acabados de lujo.',
            'tiempo_construccion' => '6 meses',
            'imagen' => null,
            'created_at' => now(),
        ],
        (object)[
            'id' => 2,
            'nombre' => 'Cabaña de Madera',
            'descripcion' => 'Cabaña ecológica en zona rural.',
            'tiempo_construccion' => '4 meses',
            'imagen' => null,
            'created_at' => now(),
        ],
        (object)[
            'id' => 3,
            'nombre' => 'Edificio Comercial',
            'descripcion' => 'Edificio de oficinas con locales comerciales.',
            'tiempo_construccion' => '12 meses',
            'imagen' => null,
            'created_at' => now(),
        ],
    ];
@endphp --}}

<div class="container-fluid py-4">
    <!-- Header -->
    <div class="card card-dashboard mb-4">
        <div class="header-container d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-0 fw-bold text-dark">
                    <i class="bi bi-building me-2"></i>Gestión de Proyectos
                </h4>
                <p class="text-muted mb-0 small">Administre sus proyectos de construcción</p>
            </div>
            <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                data-bs-target="#ModalAgregarProyecto">
                <i class="bi bi-plus-lg me-2"></i>Agregar Proyecto
            </button>
        </div>
    </div>

    <!-- Tabla de proyectos -->
    <div class="card card-dashboard">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <div class="d-flex align-items-center">
                    <span class="badge bg-primary rounded-pill me-2">{{ count($proyectos) }}</span>
                    <span class="text-muted small">Proyectos registrados</span>
                </div>
                <div class="d-flex">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" id="searchInput"
                            placeholder="Buscar proyectos...">
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-technical mb-0" id="tabla-proyectos">
                    <thead>
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="width: 25%;">PROYECTO</th>
                            <th style="width: 20%;">TIEMPO DE CONSTRUCCIÓN</th>
                            <th>DESCRIPCIÓN</th>
                            <th style="width: 120px;" class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proyectos as $proyecto)
                        <tr>
                            <td class="fw-bold text-muted">#{{ $proyecto->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if ($proyecto->imagen)
                                        <div class="me-3" style="width: 40px; height: 40px;">
                                            <img src="{{ asset('storage/' . $proyecto->imagen) }}"
                                                alt="{{ $proyecto->nombre }}" class="img-fluid rounded"
                                                style="width: 40px; height: 40px; object-fit: cover;">
                                        </div>
                                    @else
                                        <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-image text-secondary" style="font-size: 1.2rem;"></i>
                                        </div>
                                    @endif
                                    <div>
                                        <h6 class="mb-0 fw-semibold">{{ $proyecto->nombre }}</h6>
                                        <small class="text-muted">ID: #{{ $proyecto->id }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="fw-semibold text-info">{{ $proyecto->Tiempo_construccion }}</span>
                            </td>
                            <td>
                                <div class="text-truncate-2" style="max-width: 250px;">
                                    {{ $proyecto->descripcion ?: 'Sin descripción' }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                        data-bs-toggle="modal" data-bs-target="#VistaProyecto{{ $proyecto->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn-action btn btn-outline-success" title="Editar proyecto"
                                        data-bs-toggle="modal"
                                        data-bs-target="#ModalEditarProyecto{{ $proyecto->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn-action btn btn-outline-danger" title="Eliminar proyecto"
                                        data-bs-toggle="modal"
                                        data-bs-target="#ModalEliminarProyecto{{ $proyecto->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        {{-- Modal ver proyecto --}}
                        <div class="modal fade" id="VistaProyecto{{ $proyecto->id }}" tabindex="-1"
                            aria-labelledby="modalProyectoLabel{{ $proyecto->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title fw-bold" id="modalProyectoLabel{{ $proyecto->id }}">
                                            Detalles del Proyecto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="row g-0">
                                            <!-- Columna de imagen -->
                                            <div class="col-md-5 bg-light d-flex align-items-center justify-content-center p-3">
                                                @if ($proyecto->imagen)
                                                    <img src="{{ asset('storage/' . $proyecto->imagen) }}"
                                                        class="img-fluid rounded" alt="{{ $proyecto->nombre }}">
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
                                                        {{ $proyecto->nombre }}</h3>
                                                    <div class="mb-3">
                                                        <h6 class="fw-bold mb-2">
                                                            <i class="bi bi-clock-history me-1"></i> Tiempo de Construcción
                                                        </h6>
                                                        <span class="badge bg-info text-dark">{{ $proyecto->tiempo_construccion }}</span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="fw-bold mb-2">
                                                            <i class="bi bi-info-circle me-1"></i> Descripción
                                                        </h6>
                                                        <div class="p-3 bg-light rounded">
                                                            @if ($proyecto->descripcion)
                                                                <p class="mb-0">{{ $proyecto->descripcion }}</p>
                                                            @else
                                                                <p class="text-muted mb-0">No hay descripción disponible para este proyecto.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                                        <span class="badge bg-secondary">
                                                            <i class="bi bi-hash me-1"></i>ID: {{ $proyecto->id }}
                                                        </span>
                                                        <small class="text-muted">
                                                            <i class="bi bi-clock me-1"></i>Creado:
                                                            {{ $proyecto->created_at->format('d/m/Y') }}
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
                        {{-- Fin Modal ver proyecto --}}

                        {{-- Modal editar proyecto --}}
                        <div class="modal fade" id="ModalEditarProyecto{{ $proyecto->id }}" tabindex="-1"
                            aria-labelledby="editarProyectoLabel{{ $proyecto->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title fw-bold"
                                            id="editarProyectoLabel{{ $proyecto->id }}">
                                            <i class="bi bi-pencil-square me-2"></i>Editar Proyecto
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('admin.proyecto.update', $proyecto) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body p-4">
                                            <div class="row mb-4">
                                                <div class="col-md-12 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        @if ($proyecto->imagen)
                                                            <img src="{{ asset('storage/' . $proyecto->imagen) }}"
                                                                alt="{{ $proyecto->nombre }}"
                                                                class="img-thumbnail me-3"
                                                                style="width: 60px; height: 60px; object-fit: cover;">
                                                        @else
                                                            <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                                style="width: 60px; height: 60px;">
                                                                <i class="bi bi-image text-secondary"></i>
                                                            </div>
                                                        @endif
                                                        <div>
                                                            <h6 class="fw-bold mb-0">{{ $proyecto->nombre }}</h6>
                                                            <small class="text-muted">ID: {{ $proyecto->id }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label for="nombre{{ $proyecto->id }}"
                                                        class="form-label fw-medium">
                                                        <i class="bi bi-tag me-1 text-primary"></i>Nombre del Proyecto
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="nombre{{ $proyecto->id }}" name="nombre"
                                                        value="{{ $proyecto->nombre }}" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="tiempo{{ $proyecto->id }}"
                                                        class="form-label fw-medium">
                                                        <i class="bi bi-clock-history me-1 text-primary"></i>Tiempo de Construcción
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="tiempo{{ $proyecto->id }}" name="tiempo_construccion"
                                                        value="{{ $proyecto->Tiempo_construccion }}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label for="imagen{{ $proyecto->id }}"
                                                        class="form-label fw-medium">
                                                        <i class="bi bi-image me-1 text-primary"></i>Imagen del Proyecto
                                                    </label>
                                                    <input class="form-control" type="file"
                                                        id="imagen{{ $proyecto->id }}" name="imagen"
                                                        accept="image/*">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="descripcion{{ $proyecto->id }}"
                                                    class="form-label fw-medium">
                                                    <i class="bi bi-text-paragraph me-1 text-primary"></i>Descripción
                                                </label>
                                                <textarea class="form-control" id="descripcion{{ $proyecto->id }}" name="descripcion" rows="3">{{ $proyecto->descripcion }}</textarea>
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
                        {{-- Fin modal editar proyecto --}}

                        <!-- Modal eliminar proyecto -->
                        <div class="modal fade" id="ModalEliminarProyecto{{ $proyecto->id }}" tabindex="-1"
                            aria-labelledby="eliminarProyectoLabel{{ $proyecto->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title fw-bold"
                                            id="eliminarProyectoLabel{{ $proyecto->id }}">
                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>Confirmar Eliminación
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="text-center mb-4">
                                            <div class="display-1 text-danger mb-3">
                                                <i class="bi bi-trash3-fill"></i>
                                            </div>
                                            <h4 class="text-danger fw-bold">¿Está seguro de eliminar este proyecto?</h4>
                                            <p class="text-muted">Esta acción no se puede deshacer.</p>
                                        </div>
                                        <div class="card border-danger mb-3">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-center">
                                                    @if ($proyecto->imagen)
                                                        <img src="{{ asset('storage/' . $proyecto->imagen) }}"
                                                            alt="{{ $proyecto->nombre }}"
                                                            class="img-thumbnail me-3"
                                                            style="width: 60px; height: 60px; object-fit: cover;">
                                                    @else
                                                        <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center"
                                                            style="width: 60px; height: 60px;">
                                                            <i class="bi bi-image text-secondary"></i>
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <h6 class="fw-bold mb-0">{{ $proyecto->nombre }}</h6>
                                                        <div class="small text-muted">
                                                            <span class="me-2"><i
                                                                    class="bi bi-clock-history me-1"></i>{{ $proyecto->tiempo_construccion }}</span>
                                                        </div>
                                                        <div class="small text-muted">
                                                            <span><i class="bi bi-hash me-1"></i>ID:
                                                                {{ $proyecto->id }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            <i class="bi bi-x-circle me-1"></i>Cancelar
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="bi bi-trash3-fill me-1"></i>Eliminar Proyecto
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Modal eliminar proyecto -->
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginación o mensaje si no hay proyectos -->
            @if (count($proyectos) > 0)
                <div class="d-flex justify-content-between align-items-center p-3 border-top bg-light">
                    <div class="small text-muted">
                        Mostrando {{ count($proyectos) }} proyecto(s)
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
                    <h5>No hay proyectos disponibles</h5>
                    <p class="text-muted">Comience agregando un nuevo proyecto</p>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalAgregarProyecto">
                        <i class="bi bi-plus-lg me-1"></i> Agregar Proyecto
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Modal para Agregar Proyecto -->
<div class="modal fade" id="ModalAgregarProyecto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-technical bg-primary text-white">
                <h5 class="modal-title m-0 fw-bold" id="modalLabel">
                    <i class="bi bi-plus-circle me-2"></i>Agregar Nuevo Proyecto
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.proyecto.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-3 text-muted">
                                        <i class="bi bi-info-circle me-1"></i>Información Básica
                                    </h6>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="nombre" class="form-label fw-medium">Nombre del Proyecto</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tiempo_construccion" class="form-label fw-medium">Tiempo de Construcción</label>
                                            <input type="text" class="form-control" id="tiempo_construccion" name="tiempo_construccion"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-3 text-muted">
                                        <i class="bi bi-image me-1"></i>Imagen
                                    </h6>
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="imagen" class="form-label fw-medium">Imagen del Proyecto</label>
                                            <input class="form-control" type="file" id="imagen" name="imagen"
                                                accept="image/*">
                                            <div class="mt-2" id="imagePreviewContainer" style="display: none;">
                                                <img id="previewNew" src="#" alt="Vista previa"
                                                    class="img-thumbnail" style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-3 text-muted">
                                        <i class="bi bi-text-paragraph me-1"></i>Descripción
                                    </h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="descripcion" class="form-label fw-medium">Descripción del Proyecto</label>
                                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                                placeholder="Ingrese una descripción detallada del proyecto..."></textarea>
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
                    <button type="reset" class="btn btn-outline-primary me-2">
                        <i class="bi bi-arrow-counterclockwise me-1"></i>Restablecer
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>Guardar Proyecto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
