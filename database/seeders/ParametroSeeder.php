<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParametroSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Parametro::factory(5)->create();
    }
}
