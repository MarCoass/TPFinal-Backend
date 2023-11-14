<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\carrito;

class CarritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        carrito::create([
            'id_usuario' => 2,
            'id_productos' => [
                [
                    'id_producto' => 1,
                    'cantidad' => 1
                ],
                [
                    'id_producto' => 2,
                    'cantidad' => 1
                ],
                [
                    'id_producto' => 4,
                    'cantidad' => 2
                ],
            ],
            'estado'=> 0,
            'id_ciudad'=>1,
        ]);
        
    }
}
