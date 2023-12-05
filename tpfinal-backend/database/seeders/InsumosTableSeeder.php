<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Insumo;

class InsumosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Insumo::create([ //1
            'nombre' => 'Baby square',
            'descripcion' => 'Uñas cuadradas cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',//no se como llenar tags jeje
        ]);
        Insumo::create([//2
            'nombre' => 'Cuadradas largas',
            'descripcion' => 'Uñas cuadradas largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
        Insumo::create([//3
            'nombre' => 'Almond cortas',
            'descripcion' => 'Uñas almond cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',
        ]);
        Insumo::create([//4
            'nombre' => 'Almond largas',
            'descripcion' => 'Uñas almond largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
        Insumo::create([//5
            'nombre' => 'Coffin cortas',
            'descripcion' => 'Uñas coffin cortas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'corto',
        ]);
        Insumo::create([//6
            'nombre' => 'Coffin largas',
            'descripcion' => 'Uñas coffin largas',
            'marca' => 'TipsWenardos',
            'stock' => '3',
            'estado' => '1',
            'id_categoria' => '3',
            'stock_minimo' => '1',
            'tags' => 'largo',
        ]);
        //---------------------ESMALTES
        Insumo::create([//7
            'nombre' => 'Esmalte violeta 99',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'violeta',
        ]);
        Insumo::create([//8
            'nombre' => 'Esmalte Rojo 40',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'rojo',
        ]);
        Insumo::create([//9
            'nombre' => 'Esmalte Rojo Oscuro 38',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'rojo',
        ]);
        Insumo::create([//10
            'nombre' => 'Esmalte Rosita 111',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'rosita',
        ]);
        Insumo::create([//11
            'nombre' => 'Esmalte Blanco 32',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'blanco',
        ]);
        Insumo::create([//11
            'nombre' => 'Esmalte Negro 31',
            'descripcion' => 'Esmalte semipermanente',
            'marca' => 'City Girl',
            'stock' => '1',
            'estado' => '1',
            'id_categoria' => '2',
            'stock_minimo' => '1',
            'tags' => 'blanco',
        ]);
        //---------------------LIMAS
        Insumo::create([
            'nombre' => 'Lima 180',
            'descripcion' => 'Lima gramaje 180',
            'marca' => 'City Girl',
            'stock' => '5',
            'estado' => '1',
            'id_categoria' => '1',
            'stock_minimo' => '1',
            'tags' => 'lima',
        ]);
        Insumo::create([
            'nombre' => 'Lima 200',
            'descripcion' => 'Lima gramaje 200',
            'marca' => 'City Girl',
            'stock' => '5',
            'estado' => '1',
            'id_categoria' => '1',
            'stock_minimo' => '1',
            'tags' => 'lima',
        ]);
        Insumo::create([
            'nombre' => 'Lima 240',
            'descripcion' => 'Lima gramaje 240',
            'marca' => 'City Girl',
            'stock' => '5',
            'estado' => '1',
            'id_categoria' => '1',
            'stock_minimo' => '1',
            'tags' => 'lima',
        ]);
        //---------------------DECORACION
        Insumo::create([
            'nombre' => 'Stickers Mariposa',
            'descripcion' => 'Sticker adhesivos mariposa azul',
            'marca' => 'City Girl',
            'stock' => '5',
            'estado' => '1',
            'id_categoria' => '4',
            'stock_minimo' => '1',
            'tags' => 'sticker',
        ]);
        Insumo::create([
            'nombre' => 'Strass dorado',
            'descripcion' => 'Stras dorado chico',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '4',
            'stock_minimo' => '1',
            'tags' => 'strass',
        ]);
        Insumo::create([
            'nombre' => 'Aplique Luna',
            'descripcion' => 'Aplique de luna dorada',
            'marca' => 'City Girl',
            'stock' => '4',
            'estado' => '1',
            'id_categoria' => '4',
            'stock_minimo' => '1',
            'tags' => 'aplique',
        ]);
        //---------------------KITS
        Insumo::create([
            'nombre' => 'Palito de naranja',
            'descripcion' => 'Palito de naranjo reutilizable',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '5',
            'stock_minimo' => '1',
            'tags' => 'kit',
        ]);
        Insumo::create([
            'nombre' => 'Pegamento',
            'descripcion' => 'Pegamento liquido 5ml',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '5',
            'stock_minimo' => '1',
            'tags' => 'kit',
        ]);
        Insumo::create([
            'nombre' => 'Stickers doble faz',
            'descripcion' => 'Plancha de 20 stickers doble faz',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '5',
            'stock_minimo' => '1',
            'tags' => 'kit',
        ]);
        Insumo::create([
            'nombre' => 'Lima chica',
            'descripcion' => 'Lima para kits de aplicacion',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '1',
            'stock_minimo' => '1',
            'tags' => 'kit',
        ]);
        Insumo::create([
            'nombre' => 'Alcohol pad',
            'descripcion' => 'Pad remojado el alcohol.',
            'marca' => 'City Girl',
            'stock' => '50',
            'estado' => '1',
            'id_categoria' => '5',
            'stock_minimo' => '1',
            'tags' => 'kit',
        ]);
    }
}
