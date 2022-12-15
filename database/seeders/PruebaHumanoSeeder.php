<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaHumanoSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\PruebaHumano::factory(5)->create();
    }
}
