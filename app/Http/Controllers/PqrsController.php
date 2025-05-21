<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqrs;
use Illuminate\Support\Facades\Mail;
use App\Mail\PqrsConfirmation;
use App\Mail\PqrsNotification;

class PqrsController extends Controller
{
    /**
     * Muestra el formulario PQRS
     */
    public function index()
    {
        return view('MaderAlpes.pqrs');
    }

    /**
     * Almacena una nueva solicitud PQRS
     */
    public function store(Request $request)
    {
        // Validación de datos según ISO 25010 (funcionalidad, seguridad)
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'tipo' => 'required|in:peticion,queja,reclamo,sugerencia',
            'sucursal' => 'nullable|in:pasto,ipiales,tuquerres',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string|min:10',
            'terminos' => 'required|accepted',
        ]);

        // Generar número de radicado
        $radicado = 'PQRS-' . date('Ymd') . '-' . rand(1000, 9999);

        // Guardar en la base de datos
        $pqrs = Pqrs::create([
            'radicado' => $radicado,
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'telefono' => $validated['telefono'],
            'tipo' => $validated['tipo'],
            'sucursal' => $validated['sucursal'],
            'asunto' => $validated['asunto'],
            'mensaje' => $validated['mensaje'],
            'estado' => 'recibido',
        ]);

       /*   // Enviar correo de confirmación al usuario
        Mail::to($validated['email'])->send(new PqrsConfirmation($pqrs));  */

      /*   // Enviar notificación interna
        Mail::to('bowleskamilo@gmail.com')->send(new PqrsNotification(
            $request->nombre,
            $request->email,
            $request->telefono,
            $request->tipo,
            $request->mensaje

        )); */

        // Redireccionar con mensaje de éxito
        return redirect()->route('pqrs', ['radicado' => $radicado]);
    }

    /**
     * Muestra la página de confirmación
     */
    public function success(Request $request)
    {
        $radicado = $request->radicado;
        return view('MaderAlpes.pqrs');
    }

    public function adminIndex(){
        $pqrs = Pqrs::all();
        $total = $pqrs->count();
        $pendientes = $pqrs->where('estado', 'recibido')->count();
        $enProceso = $pqrs->where('estado', 'en proceso')->count();
        return view('adminPqrs', compact('pqrs', 'total', 'pendientes', 'enProceso'));
    }
}