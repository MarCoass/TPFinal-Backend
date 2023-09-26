<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoriaInsumo;

class CategoriaInsumosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categoriaInsumo::create([
            'nombre' => 'Limas'
        ]);
        categoriaInsumo::create([
            'nombre' => 'Esmaltes'
        ]);
        categoriaInsumo::create([
            'nombre' => 'Tips'
        ]);
        categoriaInsumo::create([
            'nombre' => 'Decoracion'
        ]);
        categoriaInsumo::create([
            'nombre' => 'Kits'
        ]);
        
    }
}
