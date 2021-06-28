<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                    ['joaquin@firmasimply.com','password'],
                    ['rosario@firmasimply.com','password'],
                    ['alicia@firmasimply.com','password'],
                    ['pablo@firmasimply.com','password'],
                    ['tadeo@firmasimply.com','password'],
                    ['derian@firmasimply.com','password'],
                    ['javier@firmasimply.com','password'],
                    ['manuel.igor@firmasimply.com','password'],
                    ['moisis@firmasimply.com','password'],
                    ['jose.manuel@firmasimply.com','password'],
                    ['antonio@firmasimply.com','password'],
                    ['jimena@firmasimply.com','password'],
                    ['roberto.carlos@firmasimply.com','password'],
                    ['daniel@firmasimply.com','password'],
                    ['manuel.francisco@firmasimply.com','password'],
                    ['oscar@firmasimply.com','password'],
                    ['jose.enrique@firmasimply.com','password'],
                    ['maria@firmasimply.com','password'],
                    ['aurora@firmasimply.com','password'],
                    ['guillermo@firmasimply.com','password'],
                    ['ruben@firmasimply.com','password'],
                    ['matias@firmasimply.com','password'],
                    ['mohammad@firmasimply.com','password']
                ];
        foreach ($users as $user) {
            User::factory()->create(['email' => $user[0]]);
        }
    }
}
