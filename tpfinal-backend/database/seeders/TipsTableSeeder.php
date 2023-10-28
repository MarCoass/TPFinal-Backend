<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tip;

class TipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tip::create([//1
            // 'nombre' => 'Baby square',
            'largo' => '2',
            'forma' => 'cuadrada',
            'id_insumo' => '1',
        ]);
        Tip::create([//2
            // 'nombre' => 'Largas square',
            'largo' => '3',
            'forma' => 'cuadrada',
            'id_insumo' => '2',
        ]);
        Tip::create([//3
            // 'nombre' => 'Cortas almond',
            'largo' => '2',
            'forma' => 'almond',
            'id_insumo' => '3',
        ]);
        Tip::create([//4
            // 'nombre' => 'Largas almond',
            'largo' => '3',
            'forma' => 'almond',
            'id_insumo' => '4',
        ]);
        Tip::create([//5
            // 'nombre' => 'Cortas coffin',
            'largo' => '2',
            'forma' => 'coffin',
            'id_insumo' => '5',
        ]);
        Tip::create([//6
            // 'nombre' => 'Largas coffin',
            'largo' => '3',
            'forma' => 'coffin',
            'id_insumo' => '6',
        ]);
    }
}
