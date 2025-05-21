<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view("producto", compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // Inicializar la variable de ruta de imagen
        $imagenPath = null;

        /*  // Procesar la imagen si se ha subido una
        if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            // Guardar la imagen en storage/app/public/productos
            $imagenPath = $request->file('imagen')->store('productos', 'public');
        }
 */
        if ($request->hasFile('imagen')) {
            $imagenPath = Storage::put('productos', $request->imagen);
        }

        // Creación del producto
        Producto::create([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);


        // Redireccionar con mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $imagenPath = null;

        if ($request->hasFile('imagen')) {
            $imagenPath = Storage::put('productos', $request->imagen);
        }


        $producto->update([
            'nombre' => $request->input('nombre'),
            'categoria' => $request->input(('categoria')),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $imagenPath,
        ]);

               // Redireccionar con mensaje de éxito
        return redirect()->route('productos.index')
            ->with('edit', 'Producto actulizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')
            ->with('delete', 'Producto eliminado correctamente');
    }
}
