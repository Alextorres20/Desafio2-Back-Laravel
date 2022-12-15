<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiosHumanoSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\DiosHumano::factory(5)->create();
    }
}
