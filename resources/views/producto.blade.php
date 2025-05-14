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

        <div class="modal fade modal-lg" id="ModalAgregarProducto" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header py-3 bg-primary ">
                        <h5 class="modal-title m-0 font-weight-bold text-white" id="exampleModalLabel">Información del
                            Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Nombre del Producto -->
                                <div class="col-md-6 mb-3">
                                    <label for="nombre" class="form-label">Nombre del Producto</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                                    @error('nombre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Categoría -->
                                <div class="col-md-6 mb-3">
                                    <label for="categoria_id" class="form-label">Categoría</label>
                                    <select class="form-select @error('categoria_id') is-invalid @enderror"
                                        id="categoria_id" name="categoria_id" required>
                                        <option value="" selected disabled>Seleccione una categoría</option>
                                        {{--   @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id " {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach --}}
                                    </select>
                                    @error('categoria_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">


                                    <!-- Precio -->
                                    <div class="col-md-6 mb-3">
                                        <label for="precio" class="form-label">Precio ($)</label>
                                        <input type="number" step="0.01"
                                            class="form-control @error('precio') is-invalid @enderror" id="precio"
                                            name="precio" value="{{ old('precio') }}" required>
                                        @error('precio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Imagen -->
                                    <div class="col-md-4 mb-3">
                                        <label for="imagen" class="form-label">Imagen del Producto</label>
                                        <input class="form-control @error('imagen') is-invalid @enderror" type="file"
                                            id="imagen" name="imagen">
                                        @error('imagen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Descripción -->
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion"
                                    rows="3">{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>




                    </div>
                    <div class="modal-footer d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <button type="reset" class="btn btn-secondary me-md-2">
                            <i class="bi bi-x-circle me-1"></i> Limpiar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i> Guardar Producto
                        </button>
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
                        <table class="table elegant-table">
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
                                <tr>
                                    <td class="fw-bold">#1001</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Alex+Ramirez&background=6a11cb&color=fff&rounded=true"
                                                class="rounded-circle me-3" width="36" height="36">
                                            <span>Alex Ramírez</span>
                                        </div>
                                    </td>
                                    <td>alex.ramirez@example.com</td>
                                    <td>Administrador</td>
                                    <td>
                                        <span class="status-badge status-active">
                                            <i class="fas fa-circle me-1" style="font-size: 8px;"></i> Activo
                                        </span>
                                    </td>
                                    <td>15/06/2023</td>
                                    <td>
                                        <button class="action-btn btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn btn btn-sm btn-outline-success">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="action-btn btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Mostrando 1 de 128 registros
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Scripts específicos para esta vista
        document.addEventListener('DOMContentLoaded', function() {
            // Ejemplo de script para previsualizar la imagen
            const imagenInput = document.getElementById('imagen');
            if (imagenInput) {
                imagenInput.addEventListener('change', function(e) {
                    // Lógica para previsualizar la imagen
                });
            }
        });
    </script>
@endpush
