<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        producto::create([
            'nombre'=> 'Corazones Lila baby square', 
            'descripcion' => 'Uñas lilas lisas y uñas claritas con corazones lilas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1600, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-lila-baby-square.png', 
            'stock'=> 3
        ]);
        producto::create([
            'nombre'=> 'Lineas curvas verde agua almendra largas', 
            'descripcion' => 'Uñas verde agua con líneas curvas verde oscuro, almendra largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/negro-baby-square.png', 
            'stock'=> 2
        ]);
        producto::create([
            'nombre'=> 'Uñas negras, baby square', 
            'descripcion' => 'Uñas negras lisas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/negro-baby-square.png', 
            'stock'=> 4
        ]);
    }
}