<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CaracteristicaUsuarioSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\CaracteristicaUsuario::factory(5)->create();
    }
}
