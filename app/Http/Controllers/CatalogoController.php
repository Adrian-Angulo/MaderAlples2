<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
        public function catalogo(){
        // Obtener solo los productos y proyectos activos, ordenados por fecha de creación descendente
        $productos = Producto::all();

        $proyectos = Proyecto::all();

        return view("MaderAlpes.catalogo", compact('productos', 'proyectos'));
    }
}
