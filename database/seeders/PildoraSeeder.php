<?php

namespace Database\Seeders;

use App\Models\Pildora;
use Illuminate\Database\Seeder;

class PildoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pildora::factory()->count(5)->create();
    }
}
