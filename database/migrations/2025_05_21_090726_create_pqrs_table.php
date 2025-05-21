<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();
            $table->string('radicado')->unique();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->enum('tipo', ['peticion', 'queja', 'reclamo', 'sugerencia']);
            $table->string('sucursal')->nullable();
            $table->text('mensaje');
            $table->enum('estado', ['recibido', 'en_proceso', 'resuelto', 'cerrado'])->default('recibido');
            $table->text('respuesta')->nullable();
            $table->timestamp('fecha_respuesta')->nullable();
            $table->string('respondido_por')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrs');
    }
};