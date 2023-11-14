<?php

namespace Database\Seeders;

use App\Models\parametros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParametrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        parametros::create([
            'nombre'=>'instagram_url',
            'valor' => 'instagram.com'
        ]);
        parametros::create([
            'nombre'=>'instagram_nombre',
            'valor' => 'Mar Nails'
        ]);
        parametros::create([
            'nombre'=>'whatsapp',
            'valor' => '2994677550'
        ]);
        parametros::create([
            'nombre'=>'horario_atencion_apertura',
            'valor' => '09:00'
        ]);
        parametros::create([
            'nombre'=>'horario_atencion_cierre',
            'valor' => '20:00'
        ]);
        parametros::create([
            'nombre'=>'valor_senia',
            'valor' => '1000'
        ]);
        parametros::create([
            'nombre'=>'demora_cotizacion',
            'valor' => '2 dias'
        ]);
        parametros::create([
            'nombre'=>'demora_trabajo',
            'valor' => '1 semana'
        ]);
        parametros::create([
            'nombre'=>'pedidos_abiertos',
            'valor' => true
        ]);
    }
}
