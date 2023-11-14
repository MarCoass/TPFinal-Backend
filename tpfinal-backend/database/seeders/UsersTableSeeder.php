<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Administrador',
            'nombre' => 'Nombre admin',
            'apellido' => 'Apellido admin',
            'email' => 'admin@correo.com',
            'password' => 'admin',
            'sets_favoritos'=>[],
            'id_rol' => 1
        ]);
        User::create([
            'username' => 'Cliente',
            'nombre' => 'Nombre cliente',
            'apellido' => 'Apellido cliente',
            'email' => 'cliente@correo.com',
            'password' => 'cliente',
            'sets_favoritos'=>
            [
                ['id_producto'=>1],
                ['id_producto'=>4], 
                ['id_producto'=>7]
            ],
            'id_rol' => 2
        ]);
        User::create([
            'username' => 'marcoass',
            'nombre' => 'Martina',
            'apellido' => 'Coassin',
            'email' => 'martycoassin@gmail.com',
            'password' => 'contraseña',
            'id_rol' => 2,
            'sets_favoritos'=>[],
            'num_telefono' => 2994677550,
            'observacion' => 'Cliente conflictiva'
        ]);
    }
}
