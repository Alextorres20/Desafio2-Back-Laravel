<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HumanoSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Humano::factory(2)->create();
    }
}
