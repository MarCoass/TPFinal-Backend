<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ciudad::create([
            'nombre'=>'Cipolletti', 
            'valor_envio'=>500
        ]);
    }
}