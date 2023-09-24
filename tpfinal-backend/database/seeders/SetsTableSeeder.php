<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Set;

class SetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '1',
            'id_tips' => '1',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '2',
            'id_tips' => '4',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '3',
            'id_tips' => '1',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '4',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '5',
            'id_tips' => '2',
        ]);
        Set::create([
            'id_categoria' => '3',
            'id_producto' => '6',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '7',
            'id_tips' => '1',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '8',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '3',
            'id_producto' => '9',
            'id_tips' => '2',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '10',
            'id_tips' => '2',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '11',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '12',
            'id_tips' => '4',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '13',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '3',
            'id_producto' => '14',
            'id_tips' => '6',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '15',
            'id_tips' => '1',
        ]);
        Set::create([
            'id_categoria' => '2',
            'id_producto' => '16',
            'id_tips' => '1',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '17',
            'id_tips' => '2',
        ]);
        Set::create([
            'id_categoria' => '1',
            'id_producto' => '18',
            'id_tips' => '6',
        ]);

    }
}
