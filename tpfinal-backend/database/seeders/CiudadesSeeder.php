<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create([
            'nombre' => 'Plaza Huincul',
            'valor_envio' => 300
        ]);
        Ciudad::create([
            'nombre' => 'Cipolletti',
            'valor_envio' => 0
        ]);
        Ciudad::create([
            'nombre' => 'Cutral-co',
            'valor_envio' => 300
        ]);
       
    }
}
