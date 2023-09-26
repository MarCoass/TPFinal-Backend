<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\esmalte;

class EsmaltesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Esmalte::create([
            'codigo_color' => '#cc59ff',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 7
        ]);
        Esmalte::create([
            'codigo_color' => '#e30003',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 8
        ]);
        Esmalte::create([
            'codigo_color' => '#9b0204',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 9
        ]);
        Esmalte::create([
            'codigo_color' => '#fed8d8',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 10
        ]);
        Esmalte::create([
            'codigo_color' => '#ffffff',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 11
        ]);
        Esmalte::create([
            'codigo_color' => '#000000',
            'usos_maximos' => '10',
            'usos' => 0,
            'id_insumo' => 12
        ]);
    }
}
