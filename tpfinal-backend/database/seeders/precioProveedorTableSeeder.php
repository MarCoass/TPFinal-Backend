<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\precioProveedor;

class precioProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        precioProveedor::create([
            'id_proveedor' => '1',
            'id_insumo' => '1',
            'precio' => '3400'
        ]);
        precioProveedor::create([
            'id_proveedor' => '2',
            'id_insumo' => '1',
            'precio' => '3600'
        ]);
        precioProveedor::create([
            'id_proveedor' => '1',
            'id_insumo' => '1',
            'precio' => '3500'
        ]);
    }
}
