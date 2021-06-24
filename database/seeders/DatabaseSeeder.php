<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AsistenciaSeeder::class,
            PildoraSeeder::class,
            CategoriaSeeder::class,
            TareaSeeder::class
        ]);
    }
}
