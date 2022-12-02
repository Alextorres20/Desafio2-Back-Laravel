<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{//Alejandro
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Humano::factory(10)->create();
        \App\Models\DiosHumano::Factory(10)->create();
        // \App\Models\Caracteristica::factory(10)->create();
        // \App\Models\CaracteristicaUsuario::factory(10)->create();
        \App\Models\Prueba::factory(10)->create();
        \App\Models\PruebaPuntual::factory(10)->create();
        \App\Models\PruebaOraculo::factory(10)->create();
        \App\Models\PruebaOraculoLibre::factory(10)->create();
        \App\Models\PruebaOraculoValoracion::Factory(10)->create();
        \App\Models\PruebaOraculoEleccion::Factory(10)->create();
        \App\Models\PruebaHumano::Factory(10)->create();




    }
}
