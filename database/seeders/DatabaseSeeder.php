<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 4edcca8 (second commit)

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
<<<<<<< HEAD
=======
        User::create([
            'name' => 'Elsa Estika',
            'email' => 'elsa@gmail.com',
            'password' => bcrypt('12345'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('2006'),
            'level' => 'operator'
        ]);
>>>>>>> 4edcca8 (second commit)
    }
}
