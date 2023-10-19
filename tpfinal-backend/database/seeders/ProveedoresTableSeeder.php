<?php

namespace Database\Seeders;

use App\Models\proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        proveedor::create([
            'nombre' =>'Reinas Insumos',
            'direccion' => 'Naciones Unidas 1600, Cipolletti',
            'anotacion' => ''
        ]);
        proveedor::create([
            'nombre' =>'MAUI',
            'direccion' => 'San Martin 200, Neuquen',
            'anotacion' => ''
        ]);
        proveedor::create([
            'nombre' =>'AR Nails',
            'direccion' => 'Alen 1504, Cipolletti',
            'anotacion' => ''
        ]);
    }
}
