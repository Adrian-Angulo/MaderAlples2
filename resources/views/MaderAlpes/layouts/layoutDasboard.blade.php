<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MaderAlpes</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Tabla stylo CSS -->
    <link rel="stylesheet" href="/css/tableStyle.css">
    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- DataTables Responsive CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <style>
        /* Estilos para el sidebar y contenido principal */
        body {
            overflow-x: hidden;
        }

        #wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #fff;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.3s;
        }

        #sidebar.collapsed {
            margin-left: -250px;
        }

        #content {
            width: calc(100% - 250px);
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }

        #content.expanded {
            width: 100%;
        }

        .sidebar-header {
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
        }

        .sidebar-body {
            flex-grow: 1;
            overflow-y: auto;
            max-height: calc(100vh - 140px);
        }

        .sidebar-footer {
            padding: 15px;
            border-top: 1px solid #dee2e6;
        }

        .nav-link {
            color: #212529;
            border-radius: 0.25rem;
            margin-bottom: 5px;
            transition: all 0.2s;
        }

        .nav-link:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .nav-link.active {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
        }

        /* Estilos para dispositivos móviles */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                width: 100%;
            }

            #content.shrink {
                width: calc(100% - 250px);
                margin-right: 0;
            }

            #sidebarCollapseBtn {
                display: block;
            }
        }

        /* Overlay para dispositivos móviles cuando el sidebar está abierto */
        .overlay {
            display: none;
            position: fixed;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            z-index: 998;
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .overlay.active {
            display: block;
            opacity: 1;
        }

        /* Estilos para el botón flotante en móvil */
        #sidebarCollapseBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            z-index: 1000;
            display: none;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>

    <div id="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="/img/logoMaderalpes.png" alt="Logo" class="me-2" style="width: 40px; height: 20px;">
                    <span class="fw-bold ms-2">administracion</span>
                </a>
            </div>

            <!-- Sidebar Body -->
            <div class="sidebar-body p-3">
                <ul class="nav flex-column">
                    {{-- <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} d-flex align-items-center">
                            <i class="bi bi-grid me-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('productos.index') }}"
                            class="nav-link {{ request()->routeIs('productos.*') ? 'active' : '' }} d-flex align-items-center">
                            <i class="bi bi-box-seam me-3"></i>
                            <span>Productos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.proyecto.index') }}"
                            class="nav-link {{ request()->is('orders*') ? 'active' : '' }} d-flex align-items-center">
                            <i class="bi bi-collection me-3"></i>
                            <span>Proyectos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.pqrs.index') }}"
                            class="nav-link {{ request()->is('broadcasts*') ? 'active' : '' }} d-flex align-items-center">
                            <i class="bi bi-people me-3"></i>
                            <span>pqrs</span>
                        </a>
                    </li>
                   
                </ul>
            </div>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                <div class="dropdown">
                    <button
                        class="btn btn-light dropdown-toggle w-100 d-flex align-items-center justify-content-between"
                        type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="text-start">
                            <div class="fw-bold small text-truncate">{{ Auth::user()->name }}</div>
                            <div class="text-muted xsmall text-truncate">{{ Auth::user()->email }}</div>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person me-2"></i>
                                Mi Perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-gear me-2"></i>
                                Configuración
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Cerrar sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido Principal -->
        <div id="content">
            <!-- Header del contenido -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-light">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="ms-auto d-flex align-items-center">
                        <div class="dropdown me-3">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle border-0" type="button"
                                id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-person me-2"></i>
                                        Mi Perfil
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-gear me-2"></i>
                                        Configuración
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center">
                                            <i class="bi bi-box-arrow-right me-2"></i>
                                            Cerrar sesión
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Contenido del Dashboard -->
            <div class="container-fluid p-4">
                @yield('contenido')
            </div>
        </div>
    </div>

    <!-- Botón flotante para móviles -->
    <button class="btn btn-primary d-md-none" id="sidebarCollapseBtn">
        <i class="bi bi-list"></i>
    </button>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Toggle sidebar
            $('#sidebarCollapse, #sidebarCollapseBtn').on('click', function() {
                $('#sidebar').toggleClass('collapsed active');
                $('#content').toggleClass('expanded shrink');
                $('.overlay').toggleClass('active');
            });

            // Cerrar sidebar al hacer clic en overlay (en móviles)
            $('.overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('#content').removeClass('shrink');
                $('.overlay').removeClass('active');
            });

            // Inicializar DataTables si existe la tabla
            if ($('#tabla-productos').length) {
                $('#tabla-productos').DataTable({
                    responsive: true,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: 5
                    }],
                    order: [
                        [0, 'asc']
                    ],
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, 'Todos']
                    ],
                    dom: '<"d-flex justify-content-between align-items-center mb-3"<"d-flex align-items-center"l><"d-flex"f>>t<"d-flex justify-content-between align-items-center mt-3"<"d-flex align-items-center"i><"d-flex"p>>',
                });
            }

            // Función para previsualizar imágenes
            window.previewImage = function(input, previewId) {
                const preview = document.getElementById(previewId);
                const container = document.getElementById('imagePreviewContainer');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        container.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            };

            // Función para resetear la previsualización
            window.resetImagePreview = function(previewId, containerId) {
                const preview = document.getElementById(previewId);
                const container = document.getElementById(containerId);

                preview.src = '#';
                container.style.display = 'none';
            };

            // Función para previsualizar imágenes en edición
            window.previewEditImage = function(input, id) {
                const currentImageContainer = document.getElementById('currentImageContainer' + id);
                const newImageContainer = document.getElementById('newImageContainer' + id);
                const preview = document.getElementById('previewEdit' + id);

                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        newImageContainer.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                } else {
                    newImageContainer.style.display = 'none';
                }
            };

            // Ajustar sidebar en cambio de tamaño de ventana
            $(window).resize(function() {
                if ($(window).width() <= 768) {
                    $('#sidebar').addClass('collapsed').removeClass('active');
                    $('#content').addClass('expanded').removeClass('shrink');
                    $('.overlay').removeClass('active');
                } else {
                    $('#sidebar').removeClass('collapsed active');
                    $('#content').removeClass('expanded shrink');
                    $('.overlay').removeClass('active');
                }
            });

            // Verificar tamaño inicial de la ventana
            if ($(window).width() <= 768) {
                $('#sidebar').addClass('collapsed');
                $('#content').addClass('expanded');
                $('#sidebarCollapseBtn').show();
            } else {
                $('#sidebarCollapseBtn').hide();
            }
        });
    </script>
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
                order: [
                    [0, 'asc']
                ],
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'Todos']
                ],
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"d-flex align-items-center"l><"d-flex"f>>t<"d-flex justify-content-between align-items-center mt-3"<"d-flex align-items-center"i><"d-flex"p>>',
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
