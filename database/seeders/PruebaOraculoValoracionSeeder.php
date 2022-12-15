<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaOraculoValoracionSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\PruebaOraculoValoracion::factory(3)->create();
    }
}
