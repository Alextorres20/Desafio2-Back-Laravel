<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PruebaPuntualSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pruebas\PruebaPuntual::factory(3)->create();
    }
}
