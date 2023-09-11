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
            'name' => 'Administrador',
            'email' => 'admin@correo.com',
            'password' => 'admin',
            'id_rol' => 1
        ]);
        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@correo.com',
            'password' => 'cliente',
            'id_rol' => 2
        ]);
    }
}
