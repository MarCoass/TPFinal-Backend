<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        producto::create([
            'nombre'=> 'Corazones lila baby square', 
            'descripcion' => 'Uñas lilas lisas y uñas claritas con corazones lilas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1600, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-lila-baby-square.png', 
            'stock'=> 3
        ]);
        producto::create([
            'nombre'=> 'Lineas curvas verde agua almendra largas', 
            'descripcion' => 'Uñas verde agua con líneas curvas verde oscuro, almendra largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/lineas-2-verdeagua-almendra-largas.png', 
            'stock'=> 2
        ]);
        producto::create([
            'nombre'=> 'Negro baby square', 
            'descripcion' => 'Uñas negras lisas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/negro-baby-square.png', 
            'stock'=> 4
        ]);
        //agregado ahora
        producto::create([
            'nombre'=> 'Amarillo coffin largas', 
            'descripcion' => 'Uñas amarillas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/amarillo-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Celeste cuadradas largas', 
            'descripcion' => 'Uñas celestes lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/celeste-cuadradas-largas.png', 
            'stock'=> 0
        ]);
        producto::create([
            'nombre'=> 'Corazones blanco y negro coffin', 
            'descripcion' => 'Uñas blancas con corazones negros, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-blanco-negro-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Corazones rosa baby square', 
            'descripcion' => 'Set con uñas rosas lisas y uñas crudo con corazones rosas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-rosa-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Francesita corazon rojo glitter coffin largas', 
            'descripcion' => 'Uñas francesita con un corazón rojo con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/francesita-corazon-rojo-glitter-coffin-largas.png', 
            'stock'=> 6
        ]);
        producto::create([
            'nombre'=> 'Fuego blanco y negro cuadradas largas', 
            'descripcion' => 'Set con uñas negras y blancas lisas y uñas blanquinegras con un fuego, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/fuego-blanco-negro-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Lineas diagonales rosa y crudo cuadradas largas', 
            'descripcion' => 'Set con uñas rosas lisas y uñas crudo con líneas diagonales rosas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/lineas-1-rosa-crudo-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Rojo coffin largas', 
            'descripcion' => 'Uñas rojas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Rojo glitter almendra largas', 
            'descripcion' => 'Uñas rojas con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-glitter-almendra-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Rojo glitter coffin largas', 
            'descripcion' => 'Uñas rojas con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-glitter-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Sin cara Ghibli coffin largas', 
            'descripcion' => 'Set con uñas francesita de borde lila con susuwataris y uñas negras con la máscara del sin cara de Studio Ghibli, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/sin-cara-ghibli-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Vaquita negro baby square', 
            'descripcion' => 'Set con uñas negras lisas y uñas blancas con manchas negras de vaca, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/vaquita-negro-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Vaquita rosa baby square', 
            'descripcion' => 'Set con uñas rosas lisas y uñas blancas con manchas rosas de vaca, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/vaquita-rosa-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Violeta cuadradas largas', 
            'descripcion' => 'Uñas violetas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/violeta-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([
            'nombre'=> 'Blanco coffin largas', 
            'descripcion' => 'Uñas blancas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/blanco-coffin-largas.png', 
            'stock'=> 4
        ]);
    }
}