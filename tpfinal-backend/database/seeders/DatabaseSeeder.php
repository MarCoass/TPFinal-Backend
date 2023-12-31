<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriaInsumosSeeder::class);
        $this->call(InsumosTableSeeder::class);
        $this->call(TipsTableSeeder::class);
        $this->call(EsmaltesTableSeeder::class);
        $this->call(CategoriasSetSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(SetsTableSeeder::class);
        $this->call(InsumoProductoTableSeeder::class);
        $this->call(TareasTableSeeder::class);
    }
}
