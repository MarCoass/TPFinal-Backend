<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaSet;

class CategoriasSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaSet::create([//1
            'nombre' => 'Lisas',
            'descripcion' => 'Color liso, sin diseños',
            'precio_base' => '1000',
        ]);
        CategoriaSet::create([//2
            'nombre' => 'Diseño simple',
            'descripcion' => 'Diseño con pocos detalles',
            'precio_base' => '1500',
        ]);
        CategoriaSet::create([//3
            'nombre' => 'Diseño complejo',
            'descripcion' => 'Diseño con muchos detalles',
            'precio_base' => '1800',
        ]);
        CategoriaSet::create([//4
            'nombre' => 'Personalizado',
            'descripcion' => 'Pedidos personalizados',
            'precio_base' => '0',
        ]);
    }
}
