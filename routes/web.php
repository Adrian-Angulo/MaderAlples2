<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MaderAlpes.index');
})->name('index');
Route::get('/catalogo', function () {
    return view('MaderAlpes.catalogo');
})->name('catalogo');

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
Route::get('/categorias/index', function () {
    return view('categorias');
})->name('categorias.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
