<?php

namespace Database\Seeders;

use App\Models\insumoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsumoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        insumoProducto::create([
            'id_producto' => 1,
            'id_insumo' => 1,
            'cantidad' => 20
        ]);
        //kit de aplicacion
        insumoProducto::create([
            'id_producto' => 24,
            'id_insumo' => 21,
            'cantidad' => 1
        ]);
        insumoProducto::create([
            'id_producto' => 24,
            'id_insumo' => 19,
            'cantidad' => 1
        ]);
        insumoProducto::create([
            'id_producto' => 24,
            'id_insumo' => 22,
            'cantidad' => 1
        ]);
        insumoProducto::create([
            'id_producto' => 24,
            'id_insumo' => 23,
            'cantidad' => 1
        ]);
    }
}
