<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MaderAlpes.index');
})->name('index');

Route::get('/pqrs', function ()  {
    return view('MaderAlpes.pqrs');
})->name('pqrs.create');

Route::get('/catalogo', [CatalogoController::class, 'catalogo'])->name('catalogo');

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
Route::get("/admin/proyectos/index",[ProyectoController::class, 'index'])->name('admin.proyecto.index');
Route::post("/admin/proyectos",[ProyectoController::class, 'store'])->name('admin.proyecto.store');
Route::put('/admin/proyectos/{proyecto}', [ProyectoController::class, 'update'])->name('admin.proyecto.update');
Route::delete('/admin/proyectos/{proyecto}', [ProyectoController::class, 'destroy'])->name('admin.proyecto.destroy');




Route::get('/dashboard',[ProductoController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
