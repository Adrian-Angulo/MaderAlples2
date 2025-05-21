@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <div class="container-fluid py-4">
        <!-- Header con título y botones de acción -->
        <div class="card card-dashboard mb-4">
            <div class="header-container d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="bi bi-chat-square-text me-2"></i>Gestión de PQRS
                    </h4>
                    <p class="text-muted mb-0 small">Administre las peticiones, quejas, reclamos y sugerencias</p>
                </div>
                <div>
                    
                </div>
            </div>
        </div>

        <!-- Tarjetas de estadísticas -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase small">Total PQRS</h6>
                                <h3 class="fw-bold mb-0">124</h3>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="bi bi-chat-square-text text-primary fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="badge bg-success">
                                <i class="bi bi-arrow-up me-1"></i>12%
                            </span>
                            <span class="text-muted small ms-2">Desde el mes pasado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase small">Pendientes</h6>
                                <h3 class="fw-bold mb-0 text-warning">18</h3>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="bi bi-clock-history text-warning fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;"
                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <small class="text-muted">15% del total</small>
                                <small class="text-muted">18 de 124</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase small">En proceso</h6>
                                <h3 class="fw-bold mb-0 text-info">32</h3>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="bi bi-gear text-info fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 26%;" aria-valuenow="26"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <small class="text-muted">26% del total</small>
                                <small class="text-muted">32 de 124</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 text-uppercase small">Resueltos</h6>
                                <h3 class="fw-bold mb-0 text-success">74</h3>
                            </div>
                            <div class="rounded-circle bg-light p-3">
                                <i class="bi bi-check-circle text-success fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 59%;"
                                    aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <small class="text-muted">59% del total</small>
                                <small class="text-muted">74 de 124</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenedor principal de la tabla -->
        <div class="card card-dashboard">
            <div class="card-body p-0">
                <!-- Barra de filtros/búsqueda -->
                <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="btn-group me-3">
                            <button type="button" class="btn btn-sm btn-outline-primary active">Todos</button>
                            <button type="button" class="btn btn-sm btn-outline-primary">Pendientes</button>
                            <button type="button" class="btn btn-sm btn-outline-primary">En proceso</button>
                            <button type="button" class="btn btn-sm btn-outline-primary">Resueltos</button>
                        </div>
                        <span class="badge bg-primary rounded-pill me-2">124</span>
                        <span class="text-muted small">solicitudes en total</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="searchInput"
                                placeholder="Buscar solicitudes...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de PQRS -->
                <div class="table-responsive">
                    <table class="table table-technical mb-0" id="tabla-pqrs">
                        <thead>
                            <tr>
                                <th style="width: 80px;">RADICADO</th>
                                <th style="width: 20%;">SOLICITANTE</th>
                                <th style="width: 12%;">TIPO</th>
                                <th style="width: 12%;">SUCURSAL</th>
                                <th style="width: 12%;">FECHA</th>
                                <th style="width: 12%;">ESTADO</th>
                                <th>ASUNTO</th>
                                <th style="width: 120px;" class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PQRS 1 -->


                            @foreach($pqrs as $item)
                                <tr>
                                    <td class="fw-bold text-muted">{{ $item->radicado }}</td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 fw-semibold">{{ $item->nombre }}</h6>
                                            <div class="small text-muted">
                                                <i class="bi bi-envelope-fill me-1"></i>{{ $item->email }}
                                            </div>
                                            <div class="small text-muted">
                                                <i class="bi bi-telephone-fill me-1"></i>{{ $item->telefono }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $tipoColors = [
                                                'Petición' => 'primary',
                                                'Queja' => 'warning',
                                                'Reclamo' => 'danger',
                                                'Sugerencia' => 'success'
                                            ];
                                            $tipoColor = $tipoColors[$item->tipo] ?? 'secondary';
                                        @endphp
                                        <span class="badge badge-outline badge-outline-{{ $tipoColor }}">{{ $item->tipo }}</span>
                                    </td>
                                    <td>{{ $item->sucursal }}</td>
                                    <td>
                                        <div class="small">
                                            <div><i class="bi bi-calendar-event me-1"></i>{{ \Carbon\Carbon::parse($item->fecha)->format('d/m/Y') }}</div>
                                            <div class="text-muted"><i class="bi bi-clock me-1"></i>{{ \Carbon\Carbon::parse($item->fecha)->format('h:i A') }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                            $estadoColors = [
                                                'Pendiente' => 'warning text-dark',
                                                'En proceso' => 'info text-white',
                                                'Resuelto' => 'success',
                                                'Cerrado' => 'secondary'
                                            ];
                                            $estadoColor = $estadoColors[$item->estado] ?? 'primary';
                                        @endphp
                                        <span class="badge bg-{{ $estadoColor }}">{{ $item->estado }}</span>
                                    </td>
                                    <td>
                                        <div class="text-truncate-2" style="max-width: 250px;">
                                            {{ $item->asunto }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                                data-bs-toggle="modal" data-bs-target="#modalVerPQRS{{ $item->id }}">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-success" title="Responder solicitud"
                                                data-bs-toggle="modal" data-bs-target="#modalResponderPQRS{{ $item->id }}">
                                                <i class="bi bi-reply"></i>
                                            </button>
                                            <button class="btn-action btn btn-outline-danger" title="Archivar solicitud"
                                                data-bs-toggle="modal" data-bs-target="#modalArchivarPQRS{{ $item->id }}">
                                                <i class="bi bi-archive"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- Paginación -->
                <div class="d-flex justify-content-between align-items-center p-3 border-top bg-light">
                    <div class="small text-muted">
                        Mostrando 5 de 124 solicitudes
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ver PQRS 1 -->
    <div class="modal fade" id="modalVerPQRS1" tabindex="-1" aria-labelledby="modalVerPQRSLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="modalVerPQRSLabel1">
                        <i class="bi bi-chat-square-text me-2"></i>Detalles de la Solicitud
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <!-- Información de la solicitud -->
                        <div class="col-md-12">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <span class="badge bg-warning text-dark mb-2">Pendiente</span>
                                        <h3 class="card-title fw-bold text-primary mb-0">Solicitud de información</h3>
                                    </div>
                                    <div class="text-end">
                                        <div class="small text-muted mb-1">Radicado</div>
                                        <h5 class="fw-bold text-dark mb-0">PQRS-20240520-1234</h5>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-3 text-muted">
                                                    <i class="bi bi-person me-2"></i>Información del Solicitante
                                                </h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Nombre:</span>
                                                        <span class="ms-2">María Rodríguez</span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Email:</span>
                                                        <span class="ms-2">maria.rodriguez@gmail.com</span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Teléfono:</span>
                                                        <span class="ms-2">3156789012</span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium">Sucursal:</span>
                                                        <span class="ms-2">Pasto</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-3 text-muted">
                                                    <i class="bi bi-info-circle me-2"></i>Detalles de la Solicitud
                                                </h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Tipo:</span>
                                                        <span
                                                            class="badge badge-outline badge-outline-primary ms-2">Petición</span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Fecha:</span>
                                                        <span class="ms-2">20/05/2024 - 10:30 AM</span>
                                                    </li>
                                                    <li class="mb-2">
                                                        <span class="fw-medium">Estado:</span>
                                                        <span class="badge bg-warning text-dark ms-2">Pendiente</span>
                                                    </li>
                                                    <li>
                                                        <span class="fw-medium">Tiempo de respuesta:</span>
                                                        <span class="ms-2 text-danger">2 días restantes</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold mb-3">
                                        <i class="bi bi-chat-text me-2"></i>Mensaje del Solicitante
                                    </h6>
                                    <div class="p-3 bg-light rounded">
                                        <p>Buenas tardes,</p>
                                        <p>Estoy interesada en conocer la disponibilidad de tableros de melamina en
                                            diferentes colores y texturas para un proyecto de remodelación de cocina.
                                            Específicamente, me gustaría saber si tienen disponibles tableros en tonos
                                            madera clara y oscura, y si ofrecen el servicio de corte a medida.</p>
                                        <p>También quisiera información sobre los tiempos de entrega para un pedido de
                                            aproximadamente 10 tableros y si tienen algún catálogo actualizado que puedan
                                            compartirme.</p>
                                        <p>Agradezco su atención y quedo atenta a su respuesta.</p>
                                        <p class="mb-0">Saludos cordiales,<br>María Rodríguez</p>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <h6 class="fw-bold mb-3">
                                        <i class="bi bi-clock-history me-2"></i>Historial de Seguimiento
                                    </h6>
                                    <div class="timeline">
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-indicator bg-primary"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                <span class="fw-bold">Solicitud recibida</span>
                                                <span class="text-muted ms-2">20/05/2024 - 10:30 AM</span>
                                                <div class="text-muted mt-1">La solicitud ha sido registrada en el sistema.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-indicator bg-success"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                <span class="fw-bold">Confirmación enviada</span>
                                                <span class="text-muted ms-2">20/05/2024 - 10:32 AM</span>
                                                <div class="text-muted mt-1">Se ha enviado un correo de confirmación al
                                                    solicitante.</div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-indicator bg-warning"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                <span class="fw-bold">Asignada a departamento</span>
                                                <span class="text-muted ms-2">20/05/2024 - 11:15 AM</span>
                                                <div class="text-muted mt-1">La solicitud ha sido asignada al departamento
                                                    de Ventas.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cerrar
                    </button>
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#modalAsignarPQRS1">
                        <i class="bi bi-person-check me-1"></i>Asignar
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#modalResponderPQRS1">
                        <i class="bi bi-reply me-1"></i>Responder
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Responder PQRS 1 -->
    <div class="modal fade" id="modalResponderPQRS1" tabindex="-1" aria-labelledby="modalResponderPQRSLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold" id="modalResponderPQRSLabel1">
                        <i class="bi bi-reply me-2"></i>Responder Solicitud
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{-- {{ route('admin.pqrs.responder', 'PQRS-20240520-1234') }} --}}" method="POST"
                    class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body p-4">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="badge bg-warning text-dark mb-1">Pendiente</span>
                                    <h5 class="fw-bold mb-0">PQRS-20240520-1234</h5>
                                </div>
                                <div class="text-end">
                                    <div class="small text-muted mb-1">Solicitante</div>
                                    <h6 class="fw-bold mb-0">María Rodríguez</h6>
                                </div>
                            </div>
                            <div class="card bg-light mb-3">
                                <div class="card-body py-2 px-3">
                                    <div class="small text-truncate-3">
                                        <strong>Asunto:</strong> Solicitud de información sobre disponibilidad de tableros
                                        de melamina
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="estado" class="form-label fw-medium">
                                <i class="bi bi-check-circle me-1 text-primary"></i>Actualizar Estado
                            </label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="pendiente" selected>Pendiente</option>
                                <option value="en_proceso">En proceso</option>
                                <option value="resuelto">Resuelto</option>
                                <option value="cerrado">Cerrado</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione un estado.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="respuesta" class="form-label fw-medium">
                                <i class="bi bi-chat-dots me-1 text-primary"></i>Respuesta
                            </label>
                            <textarea class="form-control" id="respuesta" name="respuesta" rows="8" required
                                placeholder="Escriba aquí su respuesta..."></textarea>
                            <div class="invalid-feedback">
                                Por favor ingrese una respuesta.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="adjuntos" class="form-label fw-medium">
                                <i class="bi bi-paperclip me-1 text-primary"></i>Adjuntos (opcional)
                            </label>
                            <input class="form-control" type="file" id="adjuntos" name="adjuntos[]" multiple>
                            <div class="form-text">Puede adjuntar archivos como catálogos, imágenes o documentos (máx. 5MB
                                por archivo).</div>
                        </div>

                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" id="enviarCopia" name="enviar_copia"
                                checked>
                            <label class="form-check-label" for="enviarCopia">
                                Enviar copia de la respuesta a mi correo
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send me-1"></i>Enviar Respuesta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Filtros Avanzados -->
    <div class="modal fade" id="modalFiltrosAvanzados" tabindex="-1" aria-labelledby="modalFiltrosLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold" id="modalFiltrosLabel">
                        <i class="bi bi-funnel me-2"></i>Filtros Avanzados
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{-- {{ route('admin.pqrs.filtrar') }} --}}" method="GET">
                    <div class="modal-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="filtroFechaInicio" class="form-label fw-medium">Fecha Inicio</label>
                                <input type="date" class="form-control" id="filtroFechaInicio" name="fecha_inicio">
                            </div>
                            <div class="col-md-6">
                                <label for="filtroFechaFin" class="form-label fw-medium">Fecha Fin</label>
                                <input type="date" class="form-control" id="filtroFechaFin" name="fecha_fin">
                            </div>
                            <div class="col-md-6">
                                <label for="filtroTipo" class="form-label fw-medium">Tipo de Solicitud</label>
                                <select class="form-select" id="filtroTipo" name="tipo">
                                    <option value="">Todos</option>
                                    <option value="peticion">Petición</option>
                                    <option value="queja">Queja</option>
                                    <option value="reclamo">Reclamo</option>
                                    <option value="sugerencia">Sugerencia</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="filtroEstado" class="form-label fw-medium">Estado</label>
                                <select class="form-select" id="filtroEstado" name="estado">
                                    <option value="">Todos</option>
                                    <option value="pendiente">Pendiente</option>
                                    <option value="en_proceso">En proceso</option>
                                    <option value="resuelto">Resuelto</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="filtroSucursal" class="form-label fw-medium">Sucursal</label>
                                <select class="form-select" id="filtroSucursal" name="sucursal">
                                    <option value="">Todas</option>
                                    <option value="pasto">Pasto</option>
                                    <option value="ipiales">Ipiales</option>
                                    <option value="tuquerres">Túquerres</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="filtroAsignado" class="form-label fw-medium">Asignado a</label>
                                <select class="form-select" id="filtroAsignado" name="asignado">
                                    <option value="">Todos</option>
                                    <option value="1">Juan Pérez</option>
                                    <option value="2">Ana Gómez</option>
                                    <option value="3">Carlos Martínez</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="filtroBusqueda" class="form-label fw-medium">Búsqueda</label>
                                <input type="text" class="form-control" id="filtroBusqueda" name="busqueda"
                                    placeholder="Radicado, nombre, email o contenido...">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Cancelar
                        </button>
                        <button type="reset" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>Limpiar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-funnel me-1"></i>Aplicar Filtros
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Asignar PQRS 1 -->
    <div class="modal fade" id="modalAsignarPQRS1" tabindex="-1" aria-labelledby="modalAsignarPQRSLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title fw-bold" id="modalAsignarPQRSLabel1">
                        <i class="bi bi-person-check me-2"></i>Asignar Solicitud
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{-- {{ route('admin.pqrs.asignar', 'PQRS-20240520-1234') }} --}}" method="POST"
                    class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body p-4">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="badge bg-warning text-dark mb-1">Pendiente</span>
                                    <h5 class="fw-bold mb-0">PQRS-20240520-1234</h5>
                                </div>
                                <div class="text-end">
                                    <div class="small text-muted mb-1">Tipo</div>
                                    <span class="badge badge-outline badge-outline-primary">Petición</span>
                                </div>
                            </div>
                            <div class="card bg-light mb-3">
                                <div class="card-body py-2 px-3">
                                    <div class="small text-truncate-3">
                                        <strong>Asunto:</strong> Solicitud de información sobre disponibilidad de tableros
                                        de melamina
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="departamento" class="form-label fw-medium">
                                <i class="bi bi-building me-1 text-primary"></i>Departamento
                            </label>
                            <select class="form-select" id="departamento" name="departamento" required>
                                <option value="" selected disabled>Seleccione un departamento</option>
                                <option value="ventas">Ventas</option>
                                <option value="atencion_cliente">Atención al Cliente</option>
                                <option value="logistica">Logística</option>
                                <option value="calidad">Control de Calidad</option>
                                <option value="gerencia">Gerencia</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione un departamento.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="responsable" class="form-label fw-medium">
                                <i class="bi bi-person me-1 text-primary"></i>Responsable
                            </label>
                            <select class="form-select" id="responsable" name="responsable" required>
                                <option value="" selected disabled>Seleccione un responsable</option>
                                <option value="1">Juan Pérez - Ventas</option>
                                <option value="2">Ana Gómez - Atención al Cliente</option>
                                <option value="3">Carlos Martínez - Logística</option>
                                <option value="4">Laura Sánchez - Control de Calidad</option>
                                <option value="5">Pedro Ramírez - Gerencia</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione un responsable.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="prioridad" class="form-label fw-medium">
                                <i class="bi bi-flag me-1 text-primary"></i>Prioridad
                            </label>
                            <select class="form-select" id="prioridad" name="prioridad" required>
                                <option value="baja">Baja</option>
                                <option value="media" selected>Media</option>
                                <option value="alta">Alta</option>
                                <option value="urgente">Urgente</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione una prioridad.
                            </div>
                        </div>

                        <div class="mb-0">
                            <label for="notas" class="form-label fw-medium">
                                <i class="bi bi-sticky me-1 text-primary"></i>Notas (opcional)
                            </label>
                            <textarea class="form-control" id="notas" name="notas" rows="3"
                                placeholder="Instrucciones o comentarios para el responsable..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Cancelar
                        </button>
                        <button type="submit" class="btn btn-info text-white">
                            <i class="bi bi-person-check me-1"></i>Asignar Solicitud
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Inicialización de DataTables
            $('#tabla-pqrs').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                },
                columnDefs: [{
                    orderable: false,
                    targets: 7
                }],
                order: [
                    [4, 'desc']
                ],
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'Todos']
                ],
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"d-flex align-items-center"l><"d-flex"f>>t<"d-flex justify-content-between align-items-center mt-3"<"d-flex align-items-center"i><"d-flex"p>>',
            });

            // Validación de formularios
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();

            // Estilos para la línea de tiempo
            const timelineStyles = `
            .timeline {
                position: relative;
                padding-left: 1.5rem;
            }
            .timeline:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0.75rem;
                height: 100%;
                border-left: 1px dashed #dee2e6;
            }
            .timeline-item {
                position: relative;
                padding-bottom: 1.5rem;
            }
            .timeline-item:last-child {
                padding-bottom: 0;
            }
            .timeline-item-marker {
                position: absolute;
                left: -1.5rem;
                width: 1.5rem;
                height: 1.5rem;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .timeline-item-marker-indicator {
                width: 0.75rem;
                height: 0.75rem;
                border-radius: 100%;
            }
            .timeline-item-content {
                padding-left: 0.75rem;
            }
        `;

            // Agregar estilos a la página
            const styleElement = document.createElement('style');
            styleElement.textContent = timelineStyles;
            document.head.appendChild(styleElement);
        });
    </script>
@endsection
