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
            'id_usuario' => '3'
        ]);
    }
}
