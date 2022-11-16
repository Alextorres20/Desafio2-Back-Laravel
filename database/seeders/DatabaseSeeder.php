<?php

namespace Database\Seeders;

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
        // \App\Models\Humano::factory(10)->create();
        // \App\Models\Caracteristica::factory(10)->create();

        \App\Models\CaracteristicaUsuario::factory(10)->create();
    }
}
