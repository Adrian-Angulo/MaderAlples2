@extends('MaderAlpes.layouts.appAlpes')

@section('contenido')
    <h1>Notificación de PQRS</h1>
    <p>Se ha recibido una nueva solicitud PQRS.</p>
    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Teléfono:</strong> {{ $telefono }}</p>
    <p><strong>Tipo:</strong> {{ $tipo }}</p>
    <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
@endsection
