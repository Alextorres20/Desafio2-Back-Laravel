<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\Prueba::factory(3)->create();
    }
}
