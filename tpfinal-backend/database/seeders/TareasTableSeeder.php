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
            'titulo' => 'Ejemplo tarea 1',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
        Tarea::create([
            'titulo' => 'Ejemplo tarea 2',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
        Tarea::create([
            'titulo' => 'Ejemplo tarea 3',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
        Tarea::create([
            'titulo' => 'Ejemplo tarea 4',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
        Tarea::create([
            'titulo' => 'Ejemplo tarea 5',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
        Tarea::create([
            'titulo' => 'Ejemplo tarea 6',
            'descripcion' => 'Descripcion del ejemplo de la tarea',
            'estado' => 0,
            'fecha_vencimiento' => '11/12/2000'
        ]);
    }
}
