@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <!-- Main Content -->
    <main class="main-content p-0">
        <!-- Header del Dashboard -->
        <div class="bg-light border-bottom p-4 mb-4 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-1 fw-bold">Panel de Control</h1>
                    <p class="text-muted mb-0 small">Bienvenido al sistema de administración</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle d-flex align-items-center"
                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-calendar3 me-2"></i>Últimos 30 días
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Hoy</a></li>
                            <li><a class="dropdown-item" href="#">Últimos 7 días</a></li>
                            <li><a class="dropdown-item" href="#">Últimos 30 días</a></li>
                            <li><a class="dropdown-item" href="#">Este mes</a></li>
                            <li><a class="dropdown-item" href="#">Este año</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-sm d-flex align-items-center">
                        <i class="bi bi-download me-2"></i>Exportar
                    </button>
                </div>
            </div>
        </div>

        <!-- Contenido del Dashboard -->
        <div class="px-4 pb-4">
            <!-- Tarjetas de Estadísticas -->
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-muted mb-1 fw-normal">Ventas Totales</h6>
                                    <h3 class="mb-0 fw-bold">$24,580</h3>
                                    <div class="mt-2 d-flex align-items-center">
                                        <span class="badge bg-success-subtle text-success me-1">
                                            <i class="bi bi-arrow-up-short"></i>12%
                                        </span>
                                        <span class="text-muted small">vs mes anterior</span>
                                    </div>
                                </div>
                                <div class="bg-primary bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-cart3 text-primary fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-muted mb-1 fw-normal">Nuevos Clientes</h6>
                                    <h3 class="mb-0 fw-bold">385</h3>
                                    <div class="mt-2 d-flex align-items-center">
                                        <span class="badge bg-success-subtle text-success me-1">
                                            <i class="bi bi-arrow-up-short"></i>8%
                                        </span>
                                        <span class="text-muted small">vs mes anterior</span>
                                    </div>
                                </div>
                                <div class="bg-success bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-people text-success fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-muted mb-1 fw-normal">Productos Vendidos</h6>
                                    <h3 class="mb-0 fw-bold">1,248</h3>
                                    <div class="mt-2 d-flex align-items-center">
                                        <span class="badge bg-danger-subtle text-danger me-1">
                                            <i class="bi bi-arrow-down-short"></i>3%
                                        </span>
                                        <span class="text-muted small">vs mes anterior</span>
                                    </div>
                                </div>
                                <div class="bg-info bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-box-seam text-info fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-muted mb-1 fw-normal">Tasa de Conversión</h6>
                                    <h3 class="mb-0 fw-bold">3.2%</h3>
                                    <div class="mt-2 d-flex align-items-center">
                                        <span class="badge bg-success-subtle text-success me-1">
                                            <i class="bi bi-arrow-up-short"></i>1.2%
                                        </span>
                                        <span class="text-muted small">vs mes anterior</span>
                                    </div>
                                </div>
                                <div class="bg-warning bg-opacity-10 p-2 rounded">
                                    <i class="bi bi-graph-up text-warning fs-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gráficos y Tablas -->
            <div class="row g-4 mb-4">
                <!-- Gráfico Principal -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-transparent py-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold">Análisis de Ventas</h5>
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-outline-secondary active">Diario</button>
                                <button type="button" class="btn btn-outline-secondary">Semanal</button>
                                <button type="button" class="btn btn-outline-secondary">Mensual</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Placeholder para gráfico -->
                            <div class="bg-light rounded p-3 d-flex align-items-center justify-content-center"
                                style="height: 300px;">
                                <div class="text-center">
                                    <i class="bi bi-bar-chart-line fs-1 text-secondary mb-3"></i>
                                    <p class="mb-0">Gráfico de ventas por período</p>
                                    <small class="text-muted">Aquí se mostraría un gráfico real con datos de ventas</small>
                                </div>
                            </div>

                            <!-- Leyenda del gráfico -->
                            <div class="d-flex justify-content-center mt-3">
                                <div class="d-flex align-items-center me-4">
                                    <div class="bg-primary rounded-circle me-2" style="width: 10px; height: 10px;"></div>
                                    <small>Ventas Actuales</small>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bg-secondary rounded-circle me-2" style="width: 10px; height: 10px;">
                                    </div>
                                    <small>Ventas Anteriores</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actividad Reciente -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-transparent py-3">
                            <h5 class="mb-0 fw-bold">Actividad Reciente</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 py-3">
                                    <div class="d-flex">
                                        <div class="bg-success bg-opacity-10 p-2 rounded me-3">
                                            <i class="bi bi-check-circle text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-medium">Nueva venta completada</p>
                                            <p class="text-muted small mb-0">Cliente: Juan Pérez</p>
                                            <small class="text-muted">Hace 5 minutos</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 py-3">
                                    <div class="d-flex">
                                        <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                                            <i class="bi bi-person-plus text-primary"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-medium">Nuevo cliente registrado</p>
                                            <p class="text-muted small mb-0">Cliente: María González</p>
                                            <small class="text-muted">Hace 20 minutos</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 py-3">
                                    <div class="d-flex">
                                        <div class="bg-warning bg-opacity-10 p-2 rounded me-3">
                                            <i class="bi bi-box text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-medium">Producto actualizado</p>
                                            <p class="text-muted small mb-0">Producto: Mesa de Centro</p>
                                            <small class="text-muted">Hace 1 hora</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item border-0 py-3">
                                    <div class="d-flex">
                                        <div class="bg-info bg-opacity-10 p-2 rounded me-3">
                                            <i class="bi bi-truck text-info"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0 fw-medium">Pedido enviado</p>
                                            <p class="text-muted small mb-0">Pedido #1234</p>
                                            <small class="text-muted">Hace 3 horas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-top text-center py-3">
                            <a href="#" class="text-decoration-none">Ver todas las actividades</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Productos Populares y Accesos Rápidos -->
            <div class="row g-4">
                <!-- Productos Populares -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-transparent py-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 fw-bold">Productos Populares</h5>
                            <button class="btn btn-sm btn-outline-primary">Ver Todos</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="border-0 ps-3">Producto</th>
                                            <th class="border-0">Categoría</th>
                                            <th class="border-0">Ventas</th>
                                            <th class="border-0">Precio</th>
                                            <th class="border-0 text-end pe-3">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 p-2">
                                                        <i class="bi bi-box-seam text-secondary"></i>
                                                    </div>
                                                    <span>Mesa de Comedor</span>
                                                </div>
                                            </td>
                                            <td>Comedor</td>
                                            <td>245</td>
                                            <td>$1,200.00</td>
                                            <td class="text-end pe-3">
                                                <span class="badge bg-success">En Stock</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 p-2">
                                                        <i class="bi bi-box-seam text-secondary"></i>
                                                    </div>
                                                    <span>Silla Ergonómica</span>
                                                </div>
                                            </td>
                                            <td>Oficina</td>
                                            <td>189</td>
                                            <td>$850.00</td>
                                            <td class="text-end pe-3">
                                                <span class="badge bg-success">En Stock</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 p-2">
                                                        <i class="bi bi-box-seam text-secondary"></i>
                                                    </div>
                                                    <span>Sofá Modular</span>
                                                </div>
                                            </td>
                                            <td>Sala</td>
                                            <td>156</td>
                                            <td>$2,450.00</td>
                                            <td class="text-end pe-3">
                                                <span class="badge bg-warning text-dark">Pocas Unidades</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-light rounded me-3 p-2">
                                                        <i class="bi bi-box-seam text-secondary"></i>
                                                    </div>
                                                    <span>Estantería Modular</span>
                                                </div>
                                            </td>
                                            <td>Almacenamiento</td>
                                            <td>132</td>
                                            <td>$780.00</td>
                                            <td class="text-end pe-3">
                                                <span class="badge bg-danger">Agotado</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accesos Rápidos -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-transparent py-3">
                            <h5 class="mb-0 fw-bold">Accesos Rápidos</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card h-100 border-0 bg-light">
                                            <div class="card-body text-center py-4">
                                                <i class="bi bi-box-seam text-primary fs-3 mb-2"></i>
                                                <h6 class="mb-0">Productos</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card h-100 border-0 bg-light">
                                            <div class="card-body text-center py-4">
                                                <i class="bi bi-people text-success fs-3 mb-2"></i>
                                                <h6 class="mb-0">Clientes</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card h-100 border-0 bg-light">
                                            <div class="card-body text-center py-4">
                                                <i class="bi bi-cart3 text-info fs-3 mb-2"></i>
                                                <h6 class="mb-0">Ventas</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card h-100 border-0 bg-light">
                                            <div class="card-body text-center py-4">
                                                <i class="bi bi-gear text-warning fs-3 mb-2"></i>
                                                <h6 class="mb-0">Configuración</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botón para mostrar/ocultar sidebar en móvil -->
        <button class="btn btn-primary d-md-none position-fixed bottom-0 end-0 m-3 rounded-circle shadow"
            id="sidebarToggle" style="width: 50px; height: 50px;">
            <i class="bi bi-list"></i>
        </button>
    </main>
@endsection
