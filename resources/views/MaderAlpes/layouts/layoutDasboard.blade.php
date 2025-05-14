<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
        }
        
        .main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }
        
        .nav-link {
            border-radius: 0.25rem;
        }
        
        .dropdown-toggle::after {
            transition: transform 0.2s ease-in-out;
        }
        
        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
            }
            .main-content {
                margin-left: 0;
            }
            .sidebar.active {
                margin-left: 0;
            }
            .main-content.active {
                margin-left: 250px;
            }
        }
    </style>
</head>

<body>





    <div class="d-flex">
        <!-- Sidebar -->
        <aside class="sidebar bg-white shadow-sm d-flex flex-column">
            <!-- Sidebar Header -->
            <div class="p-3 border-bottom">
                <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="/img/logoMaderalpes.png" alt="Logo" class="me-2" style="width: 40px; height: 20px;">
                    <span class="fw-bold ms-2">Dashboard</span>
                </a>
            </div>

            <!-- Sidebar Body -->
            <div class="flex-grow-1 overflow-auto">
                <div class="p-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-1">
                            <a href="/home" class="nav-link text-dark d-flex align-items-center">
                                <i class="bi bi-grid me-3"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="/events" class="nav-link text-dark d-flex align-items-center">
                                <i class="bi bi-box-seam me-3"></i>
                                <span>Productos</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="/orders" class="nav-link text-dark d-flex align-items-center">
                                <i class="bi bi-collection me-3"></i>
                                <span>Categorias</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="/broadcasts" class="nav-link text-dark d-flex align-items-center">
                                <i class="bi bi-people me-3"></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="/settings" class="nav-link text-dark d-flex align-items-center">
                                <i class="bi bi-file-earmark-text me-3"></i>
                                <span>Reportes</span>
                            </a>
                        </li>
                    </ul>
                </div>

                
            </div>

            <!-- Sidebar Footer -->
            <div class="p-3 border-top">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle w-100 d-flex align-items-center justify-content-between" 
                            type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="text-start">
                            <div class="fw-bold small text-truncate">{{ Auth::user()->name }}</div>
                            <div class="text-muted xsmall text-truncate ">{{ Auth::user()->email }}</div>
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
                        <li><hr class="dropdown-divider"></li>
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
        </aside>


        @yield('contenido')
            
        
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle sidebar en móvil
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });
    </script>
</body>

</html>
        
