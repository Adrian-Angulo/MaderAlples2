@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <div class="container-fluid py-4">
        <!-- Header con título y botón de agregar -->
        <div class="card card-dashboard mb-4">
            <div class="header-container d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="mb-0 fw-bold text-dark">
                        <i class="bi bi-people me-2"></i>Gestión de Usuarios
                    </h4>
                    <p class="text-muted mb-0 small">Administre los usuarios registrados en el sistema</p>
                </div>
                <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#ModalAgregarUsuario">
                    <i class="bi bi-plus-lg me-2"></i>Agregar Usuario
                </button>
            </div>
        </div>

        <!-- Tarjetas de estadísticas -->
        <div class="row mb-4">
            <!-- Total de usuarios registrados -->
            <div class="col-md-3 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                <i class="bi bi-people-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="text-muted mb-1 small">Total Usuarios</h6>
                                <h3 class="fw-bold mb-0">248</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Nuevos usuarios del mes -->
            <div class="col-md-3 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-person-plus-fill text-success fs-4"></i>
                            </div>
                            <div>
                                <h6 class="text-muted mb-1 small">Nuevos este mes</h6>
                                <h3 class="fw-bold mb-0">32</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Usuarios inactivos -->
            <div class="col-md-3 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                                <i class="bi bi-person-dash-fill text-warning fs-4"></i>
                            </div>
                            <div>
                                <h6 class="text-muted mb-1 small">Usuarios Inactivos</h6>
                                <h3 class="fw-bold mb-0">15</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Usuarios con más compras -->
            <div class="col-md-3 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3">
                                <i class="bi bi-cart-check-fill text-info fs-4"></i>
                            </div>
                            <div>
                                <h6 class="text-muted mb-1 small">Mayor Comprador</h6>
                                <h3 class="fw-bold mb-0">Carlos M.</h3>
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
                        <span class="badge bg-primary rounded-pill me-2">248</span>
                        <span class="text-muted small">Usuarios registrados</span>
                    </div>
                    <div class="d-flex">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="searchInput"
                                placeholder="Buscar usuarios...">
                        </div>
                    </div>
                </div>

                <!-- Tabla de usuarios -->
                <div class="table-responsive">
                    <table class="table table-technical mb-0" id="tabla-usuarios">
                        <thead>
                            <tr>
                                <th style="width: 60px;">ID</th>
                                <th style="width: 25%;">USUARIO</th>
                                <th style="width: 25%;">CORREO</th>
                                <th>ESTADO</th>
                                <th>FECHA REGISTRO</th>
                                <th style="width: 120px;" class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Usuario 1 -->
                            <tr>
                                <td class="fw-bold text-muted">#1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle me-3 d-flex align-items-center justify-content-center"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-person text-secondary" style="font-size: 1.2rem;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">Juan Pérez</h6>
                                            <small class="text-muted">Administrador</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">juan.perez@ejemplo.com</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">Activo</span>
                                </td>
                                <td>
                                    <span class="text-muted">15/03/2023</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                            data-bs-toggle="modal" data-bs-target="#VistaUsuario1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn btn-outline-danger" title="Eliminar usuario"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarUsuario1">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Usuario 2 -->
                            <tr>
                                <td class="fw-bold text-muted">#2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3" style="width: 40px; height: 40px;">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg"
                                                alt="María González" class="img-fluid rounded-circle"
                                                style="width: 40px; height: 40px; object-fit: cover;">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">María González</h6>
                                            <small class="text-muted">Usuario</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">maria.gonzalez@ejemplo.com</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">Activo</span>
                                </td>
                                <td>
                                    <span class="text-muted">22/04/2023</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                            data-bs-toggle="modal" data-bs-target="#VistaUsuario2">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn btn-outline-danger" title="Eliminar usuario"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarUsuario2">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Usuario 3 -->
                            <tr>
                                <td class="fw-bold text-muted">#3</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3" style="width: 40px; height: 40px;">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                                alt="Carlos Martínez" class="img-fluid rounded-circle"
                                                style="width: 40px; height: 40px; object-fit: cover;">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">Carlos Martínez</h6>
                                            <small class="text-muted">Usuario</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">carlos.martinez@ejemplo.com</span>
                                </td>
                                <td>
                                    <span class="badge bg-success">Activo</span>
                                </td>
                                <td>
                                    <span class="text-muted">10/01/2023</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                            data-bs-toggle="modal" data-bs-target="#VistaUsuario3">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn btn-outline-danger" title="Eliminar usuario"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarUsuario3">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Usuario 4 -->
                            <tr>
                                <td class="fw-bold text-muted">#4</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3" style="width: 40px; height: 40px;">
                                            <img src="https://randomuser.me/api/portraits/women/33.jpg"
                                                alt="Ana López" class="img-fluid rounded-circle"
                                                style="width: 40px; height: 40px; object-fit: cover;">
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">Ana López</h6>
                                            <small class="text-muted">Editor</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">ana.lopez@ejemplo.com</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Inactivo</span>
                                </td>
                                <td>
                                    <span class="text-muted">05/02/2023</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                            data-bs-toggle="modal" data-bs-target="#VistaUsuario4">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn btn-outline-danger" title="Eliminar usuario"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarUsuario4">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Usuario 5 -->
                            <tr>
                                <td class="fw-bold text-muted">#5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle me-3 d-flex align-items-center justify-content-center"
                                            style="width: 40px; height: 40px;">
                                            <i class="bi bi-person text-secondary" style="font-size: 1.2rem;"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">Roberto Sánchez</h6>
                                            <small class="text-muted">Usuario</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">roberto.sanchez@ejemplo.com</span>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Inactivo</span>
                                </td>
                                <td>
                                    <span class="text-muted">18/11/2022</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn-action btn btn-outline-primary" title="Ver detalles"
                                            data-bs-toggle="modal" data-bs-target="#VistaUsuario5">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn btn-outline-danger" title="Eliminar usuario"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ModalEliminarUsuario5">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Paginación -->
                <div class="d-flex justify-content-between align-items-center p-3 border-top bg-light">
                    <div class="small text-muted">
                        Mostrando 5 de 248 usuarios
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

    <!-- Modal para Ver Usuario (ejemplo para el primer usuario) -->
    <div class="modal fade" id="VistaUsuario1" tabindex="-1"
        aria-labelledby="modalUsuarioLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="modalUsuarioLabel1">
                        Detalles del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <!-- Columna de imagen -->
                        <div
                            class="col-md-4 bg-light d-flex align-items-center justify-content-center p-3">
                            <div class="text-center p-5 w-100">
                                <i class="bi bi-person-circle text-secondary"
                                    style="font-size: 5rem;"></i>
                                <p class="text-muted mt-2">Sin imagen de perfil</p>
                            </div>
                        </div>

                        <!-- Columna de información -->
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h3 class="card-title fw-bold text-primary mb-3">
                                    Juan Pérez</h3>

                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light text-dark me-2">
                                                <i
                                                    class="bi bi-envelope-fill text-primary me-1"></i>
                                            </span>
                                            <div>
                                                <small
                                                    class="text-muted d-block">Correo</small>
                                                <span
                                                    class="fw-medium">juan.perez@ejemplo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light text-dark me-2">
                                                <i
                                                    class="bi bi-person-badge text-success me-1"></i>
                                            </span>
                                            <div>
                                                <small
                                                    class="text-muted d-block">Rol</small>
                                                <span
                                                    class="fw-medium">Administrador</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light text-dark me-2">
                                                <i
                                                    class="bi bi-telephone-fill text-primary me-1"></i>
                                            </span>
                                            <div>
                                                <small
                                                    class="text-muted d-block">Teléfono</small>
                                                <span
                                                    class="fw-medium">+34 612 345 678</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light text-dark me-2">
                                                <i
                                                    class="bi bi-geo-alt-fill text-success me-1"></i>
                                            </span>
                                            <div>
                                                <small
                                                    class="text-muted d-block">Ubicación</small>
                                                <span
                                                    class="fw-medium">Madrid, España</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h6 class="fw-bold mb-2">
                                        <i class="bi bi-cart-fill me-1"></i> Historial de Compras
                                    </h6>
                                    <div class="p-3 bg-light rounded">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Fecha</th>
                                                        <th>Total</th>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#1001</td>
                                                        <td>15/04/2023</td>
                                                        <td>$125.00</td>
                                                        <td><span class="badge bg-success">Completado</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>#1042</td>
                                                        <td>22/05/2023</td>
                                                        <td>$89.50</td>
                                                        <td><span class="badge bg-success">Completado</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center mt-4">
                                    <span class="badge bg-secondary">
                                        <i class="bi bi-hash me-1"></i>ID: 1
                                    </span>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>Registrado:
                                        15/03/2023
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

    <!-- Modal para Eliminar Usuario (ejemplo para el primer usuario) -->
    <div class="modal fade" id="ModalEliminarUsuario1" tabindex="-1"
        aria-labelledby="eliminarUsuarioLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title fw-bold"
                        id="eliminarUsuarioLabel1">
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
                        <h4 class="text-danger fw-bold">¿Está seguro de eliminar este usuario?
                        </h4>
                        <p class="text-muted">Esta acción no se puede deshacer.</p>
                    </div>

                    <div class="card border-danger mb-3">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle me-3 d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-person text-secondary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">Juan Pérez</h6>
                                    <div class="small text-muted">
                                        <span class="me-2"><i
                                                class="bi bi-envelope-fill me-1"></i>juan.perez@ejemplo.com</span>
                                    </div>
                                    <div class="small text-muted">
                                        <span><i class="bi bi-hash me-1"></i>ID: 1</span>
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
                        <i class="bi bi-trash3-fill me-1"></i>Eliminar Usuario
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Usuario -->
    <div class="modal fade" id="ModalAgregarUsuario" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-header-technical bg-primary text-white">
                    <h5 class="modal-title m-0 fw-bold" id="modalLabel">
                        <i class="bi bi-person-plus me-2"></i>Agregar Nuevo Usuario
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="userForm" action="#" method="POST" class="needs-validation" novalidate>
                    <div class="modal-body p-4">
                        <div class="row g-3">
                            <!-- Información personal -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-person-circle me-1"></i>Información Personal
                                        </h6>

                                        <div class="row g-3">
                                            <!-- Nombre del Usuario -->
                                            <div class="col-md-6">
                                                <label for="nombre" class="form-label fw-medium">Nombre Completo</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Por favor ingrese el nombre del usuario.
                                                </div>
                                            </div>

                                            <!-- Correo Electrónico -->
                                            <div class="col-md-6">
                                                <label for="email" class="form-label fw-medium">Correo Electrónico</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                                <div class="invalid-feedback">
                                                    Por favor ingrese un correo electrónico válido.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Información de cuenta -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-shield-lock me-1"></i>Información de Cuenta
                                        </h6>

                                        <div class="row g-3">
                                            <!-- Contraseña -->
                                            <div class="col-md-6">
                                                <label for="password" class="form-label fw-medium">Contraseña</label>
                                                <input type="password" class="form-control" id="password" name="password" required>
                                                <div class="invalid-feedback">
                                                    Por favor ingrese una contraseña.
                                                </div>
                                            </div>

                                            <!-- Rol -->
                                            <div class="col-md-6">
                                                <label for="rol" class="form-label fw-medium">Rol</label>
                                                <select class="form-select" id="rol" name="rol" required>
                                                    <option value="" selected disabled>Seleccione un rol</option>
                                                    <option value="Usuario">Usuario</option>
                                                    <option value="Administrador">Administrador</option>
                                                    <option value="Editor">Editor</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Por favor seleccione un rol.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Información adicional -->
                            <div class="col-12">
                                <div class="card bg-light border-0">
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-3 text-muted">
                                            <i class="bi bi-info-circle me-1"></i>Información Adicional
                                        </h6>

                                        <div class="row g-3">
                                            <!-- Teléfono -->
                                            <div class="col-md-6">
                                                <label for="telefono" class="form-label fw-medium">Teléfono</label>
                                                <input type="tel" class="form-control" id="telefono" name="telefono">
                                            </div>

                                            <!-- Avatar -->
                                            <div class="col-md-6">
                                                <label for="avatar" class="form-label fw-medium">Imagen de Perfil</label>
                                                <input class="form-control" type="file" id="avatar" name="avatar"
                                                    accept="image/*">
                                                <div class="invalid-feedback">
                                                    Por favor seleccione una imagen válida.
                                                </div>
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
                            <i class="bi bi-save me-1"></i>Guardar Usuario
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection