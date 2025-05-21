<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MaderAlpes.index');
})->name('index');

Route::get('/catalogo', [ProductoController::class, 'mostrarProductos'])->name('catalogo');

Route::get('/contact', function () {
    return view('MaderAlpes.contact');
})->name('contacto');

Route::get('/nosotros', function () {
    return view('MaderAlpes.nosotros');
})->name('nosotros');

Route::get('/ubicacion', function () {
    return view('MaderAlpes.ubicacion');
})->name('ubicacion');

Route::get('/productos/index', [ProductoController::class, 'index'])->name('productos.index');
Route::put('/productos/{producto}',[ProductoController::class, 'update'])->name('productos.update');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/categorias/index', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');


Route::get('/dashboard',[ProductoController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/carrito/{id}', [CarritoController::class, 'store'])->name('carrito.store');

require __DIR__ . '/auth.php';
