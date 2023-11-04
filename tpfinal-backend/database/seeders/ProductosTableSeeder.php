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
        producto::create([//1
            'nombre'=> 'Corazones lila baby square', 
            'descripcion' => 'Uñas lilas lisas y uñas claritas con corazones lilas, cortas', 
            'id_ciudad'=> 2, 
            'precio'=> 1600, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-lila-baby-square.png', 
            'stock'=> 3
        ]);
        producto::create([//2
            'nombre'=> 'Lineas curvas verde agua almendra largas', 
            'descripcion' => 'Uñas verde agua con líneas curvas verde oscuro, almendra largas', 
            'id_ciudad'=> 2, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/lineas-2-verdeagua-almendra-largas.png', 
            'stock'=> 2
        ]);
        producto::create([//3
            'nombre'=> 'Negro baby square', 
            'descripcion' => 'Uñas negras lisas, cortas', 
            'id_ciudad'=> 3, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/negro-baby-square.png', 
            'stock'=> 4
        ]);
        //agregado ahora
        producto::create([//4
            'nombre'=> 'Amarillo coffin largas', 
            'descripcion' => 'Uñas amarillas lisas, largas', 
            'id_ciudad'=> 3, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/amarillo-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//5
            'nombre'=> 'Celeste cuadradas largas', 
            'descripcion' => 'Uñas celestes lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/celeste-cuadradas-largas.png', 
            'stock'=> 0
        ]);
        producto::create([//6
            'nombre'=> 'Corazones blanco y negro coffin', 
            'descripcion' => 'Uñas blancas con corazones negros, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-blanco-negro-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//7
            'nombre'=> 'Corazones rosa baby square', 
            'descripcion' => 'Set con uñas rosas lisas y uñas crudo con corazones rosas, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/corazones-rosa-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([//8
            'nombre'=> 'Francesita corazon rojo glitter coffin largas', 
            'descripcion' => 'Uñas francesita con un corazón rojo con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/francesita-corazon-rojo-glitter-coffin-largas.png', 
            'stock'=> 6
        ]);
        producto::create([//9
            'nombre'=> 'Fuego blanco y negro cuadradas largas', 
            'descripcion' => 'Set con uñas negras y blancas lisas y uñas blanquinegras con un fuego, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/fuego-blanco-negro-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//10
            'nombre'=> 'Lineas diagonales rosa y crudo cuadradas largas', 
            'descripcion' => 'Set con uñas rosas lisas y uñas crudo con líneas diagonales rosas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/lineas-1-rosa-crudo-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//11
            'nombre'=> 'Rojo coffin largas', 
            'descripcion' => 'Uñas rojas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//12
            'nombre'=> 'Rojo glitter almendra largas', 
            'descripcion' => 'Uñas rojas con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-glitter-almendra-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//13
            'nombre'=> 'Rojo glitter coffin largas', 
            'descripcion' => 'Uñas rojas con glitter, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/rojo-glitter-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//14
            'nombre'=> 'Sin cara Ghibli coffin largas', 
            'descripcion' => 'Set con uñas francesita de borde lila con susuwataris y uñas negras con la máscara del sin cara de Studio Ghibli, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/sin-cara-ghibli-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//15
            'nombre'=> 'Vaquita negro baby square', 
            'descripcion' => 'Set con uñas negras lisas y uñas blancas con manchas negras de vaca, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/vaquita-negro-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([//16
            'nombre'=> 'Vaquita rosa baby square', 
            'descripcion' => 'Set con uñas rosas lisas y uñas blancas con manchas rosas de vaca, cortas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/vaquita-rosa-baby-square.png', 
            'stock'=> 4
        ]);
        producto::create([//17
            'nombre'=> 'Violeta cuadradas largas', 
            'descripcion' => 'Uñas violetas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/violeta-cuadradas-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//18
            'nombre'=> 'Blanco coffin largas', 
            'descripcion' => 'Uñas blancas lisas, largas', 
            'id_ciudad'=> 1, 
            'precio'=> 1500, 
            'estado'=> 1, 
            'url_imagen' => '/productos/blanco-coffin-largas.png', 
            'stock'=> 4
        ]);
        producto::create([//19
            'nombre'=> 'Pedido Personalizado', 
            'descripcion' => 'Uñas redondas cortas con decoracion de halloween', 
            'id_ciudad'=> 1, 
            'estado'=> 0, 
            'url_imagen' => '/productos/personalizada1.jpg', 
            'stock'=> 0
        ]);
        producto::create([//20
            'nombre'=> 'Pedido Personalizado', 
            'descripcion' => 'Uñas cuadradas grises con un dibujo de Gojo en el dedo medio.', 
            'id_ciudad'=> 1, 
            'precio'=> 2000, 
            'estado'=> 0, 
            'url_imagen' => '/productos/personalizada2.jpg', 
            'stock'=> 0
        ]);
        producto::create([//21
            'nombre'=> 'Pedido Personalizado', 
            'descripcion' => 'Uñas stilletto largas degradado de nude a rojo con los dibujos de Sukuna', 
            'id_ciudad'=> 1, 
            'precio'=> 2000, 
            'estado'=> 0, 
            'url_imagen' => '/productos/personalizada3.jpg', 
            'stock'=> 0
        ]);
        producto::create([//22
            'nombre'=> 'Pedido Personalizado', 
            'descripcion' => 'Uñas almond degradado nude a verde manzana con dibujitos.', 
            'id_ciudad'=> 1, 
            'precio'=> 2000, 
            'estado'=> 0, 
            'url_imagen' => '/productos/personalizada4.jpg', 
            'stock'=> 0
        ]);
        producto::create([//23
            'nombre'=> 'Pedido Personalizado', 
            'descripcion' => 'Uñas almond con french azul y calcifer simpaticon en el indice', 
            'id_ciudad'=> 1, 
            'precio'=> 2000, 
            'estado'=> 0, 
            'url_imagen' => '/productos/personalizada5.jpg', 
            'stock'=> 0
        ]);
    }
}