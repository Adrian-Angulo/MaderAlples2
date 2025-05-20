<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Mesa de comedor',
                'descripcion' => 'Mesa de madera maciza para comedor, acabado natural.',
                'precio' => 450000,
                'imagen' => 'mesa_comedor.jpg',
                'categoria' => 'Comedor'
            ],
            [
                'nombre' => 'Silla clásica',
                'descripcion' => 'Silla de madera con respaldo ergonómico.',
                'precio' => 120000,
                'imagen' => 'silla_clasica.jpg',
                'categoria' => 'Sillas'
            ],
            [
                'nombre' => 'Armario de roble',
                'descripcion' => 'Armario amplio de roble con puertas corredizas.',
                'precio' => 850000,
                'imagen' => 'armario_roble.jpg',
                'categoria' => 'Armarios'
            ],
            [
                'nombre' => 'Estante flotante',
                'descripcion' => 'Estante de pared para libros y decoración.',
                'precio' => 60000,
                'imagen' => 'estante_flotante.jpg',
                'categoria' => 'Estantes'
            ],
            [
                'nombre' => 'Cama matrimonial',
                'descripcion' => 'Cama de madera para colchón matrimonial.',
                'precio' => 700000,
                'imagen' => 'cama_matrimonial.jpg',
                'categoria' => 'Camas'
            ]
        ]);

       
    }
}
