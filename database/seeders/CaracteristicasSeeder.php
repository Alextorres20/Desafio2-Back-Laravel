<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CaracteristicasSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Caracteristica::factory(5)->create();
    }
}
