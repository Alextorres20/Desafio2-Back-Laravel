<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaOraculoEleccionSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\PruebaOraculoEleccion::factory(3)->create();
    }
}
