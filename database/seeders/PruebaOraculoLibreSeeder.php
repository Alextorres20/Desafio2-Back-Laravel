<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaOraculoLibreSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\PruebaOraculoLibre::factory(3)->create();
    }
}
