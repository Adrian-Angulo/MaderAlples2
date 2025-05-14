@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <!-- Main Content -->
    <main class="main-content p-4">
        <div class="border-bottom mb-4">
            <h1 class="h2 mb-4">Dashboard</h1>

        </div>

        <p class="text-muted">Welcome to your application!</p>

        <!-- Botón para mostrar/ocultar sidebar en móvil -->
        <button class="btn btn-primary d-md-none mb-3" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
    </main>
@endsection
