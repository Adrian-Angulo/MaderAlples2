<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    use HasFactory;

    /**
     * La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'pqrs';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'radicado',
        'nombre',
        'email',
        'telefono',
        'tipo',
        'sucursal',
        'asunto',
        'mensaje',
        'estado',
        'respuesta',
        'fecha_respuesta',
        'respondido_por',
    ];

    /**
     * Los atributos que deben convertirse a tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'fecha_respuesta' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}