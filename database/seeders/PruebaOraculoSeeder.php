<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaOraculoSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\PruebaOraculo::factory(3)->create();
    }
}
