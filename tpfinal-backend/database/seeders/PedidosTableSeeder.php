<?php

namespace Database\Seeders;

use App\Models\pedidoPersonalizado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pedidoPersonalizado::create([
            'id_producto' => '19',
            'estado' => '0',
            'id_usuario' => '3',

        ]);
        pedidoPersonalizado::create([
            'id_producto' => '20',
            'estado' => '1',
            'id_usuario' => '3',
            'fecha_entrega' => '27/11/2023'
        ]);
        pedidoPersonalizado::create([
            'id_producto' => '21',
            'estado' => '2',
            'id_usuario' => '3',
            'fecha_entrega' => '27/11/2023'
        ]);
        pedidoPersonalizado::create([
            'id_producto' => '22',
            'estado' => '3',
            'id_usuario' => '3',
            'fecha_entrega' => '27/11/2023'
        ]);
        pedidoPersonalizado::create([
            'id_producto' => '23',
            'estado' => '4',
            'id_usuario' => '3',
            'fecha_entrega' => '27/11/2023'
        ]);
    }
}
