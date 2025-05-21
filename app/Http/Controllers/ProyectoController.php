<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view("adminProyecto", compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
        Proyecto::create([
            'nombre' => $request->nombre,
            'Tiempo_construccion' => $request->tiempo_construccion,    
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
        ]);


        // Redireccionar con mensaje de éxito
        return redirect()->route('admin.proyecto.index')
            ->with('success', 'Proyecto agregado correctamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $imagenPath = null;

        if ($request->hasFile('imagen')) {
            $imagenPath = Storage::put('productos', $request->imagen);
        }


        $proyecto->update([
            'nombre' => $request->input('nombre'),
            'Tiempo_construccion' => $request->input(('tiempo_construccion')),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $imagenPath,
        ]);

               // Redireccionar con mensaje de éxito
        return redirect()->route('admin.proyecto.index')
            ->with('edit', 'Proyecto actulizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
