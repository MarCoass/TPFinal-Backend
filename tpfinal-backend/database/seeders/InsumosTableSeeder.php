<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Insumo;

class InsumosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Insumo::create([ //1
            'nombre' => 'Baby square',
            'descripcion' => 'Uñas cuadradas cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',//no se como llenar tags jeje
        ]);
        Insumo::create([//2
            'nombre' => 'Cuadradas largas',
            'descripcion' => 'Uñas cuadradas largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
        Insumo::create([//3
            'nombre' => 'Almond cortas',
            'descripcion' => 'Uñas almond cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',
        ]);
        Insumo::create([//4
            'nombre' => 'Almond largas',
            'descripcion' => 'Uñas almond largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
        Insumo::create([//5
            'nombre' => 'Coffin cortas',
            'descripcion' => 'Uñas coffin cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',
        ]);
        Insumo::create([//6
            'nombre' => 'Coffin largas',
            'descripcion' => 'Uñas coffin largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
    }
}
