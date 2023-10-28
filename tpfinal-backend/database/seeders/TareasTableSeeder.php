<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tarea;
class TareasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tarea::create([
            'titulo' => 'Comprar esmalte',
            'descripcion' => 'Reponer esmalte rojo',
            'estado' => 0,
            'fecha_vencimiento' => '20/10/2023'
        ]);
        Tarea::create([
            'titulo' => 'Terminar uñas ',
            'descripcion' => 'Terminar set universal violeta',
            'estado' => 0,
            'fecha_vencimiento' => '22/10/2023'
        ]);
        Tarea::create([
            'titulo' => 'Revisar stock',
            'descripcion' => 'Revisar cuantos pegamentos liquidos quedan',
            'estado' => 0,
            'fecha_vencimiento' => '20/10/2023'
        ]);
        Tarea::create([
            'titulo' => 'Revisar stock',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 1,
            'fecha_vencimiento' => '21/10/2023'
        ]);
        Tarea::create([
            'titulo' => 'Publicar ofertas',
            'descripcion' => 'Publicar ofertas en instagram',
            'estado' => 1,
            'fecha_vencimiento' => '15/10/2023'
        ]);
        Tarea::create([
            'titulo' => 'Cargar stock',
            'descripcion' => 'Cargar nuevos sets a la pagina',
            'estado' => 1,
            'fecha_vencimiento' => '17/10/2023'
        ]);
    }
}
