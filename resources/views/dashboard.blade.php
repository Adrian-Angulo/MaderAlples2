@extends('MaderAlpes.layouts.layoutDasboard')

@section('contenido')
    <!-- Main Content -->
    <main class="main-content p-4">
        <div class="border-bottom mb-4">
            <h1 class="h2 mb-4">Dashboard</h1>

        </div>

        <div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card’s content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

        <!-- Botón para mostrar/ocultar sidebar en móvil -->
        <button class="btn btn-primary d-md-none mb-3" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
    </main>
@endsection
