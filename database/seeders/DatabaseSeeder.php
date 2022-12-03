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
        \App\Models\User::factory(1)->create();
        \App\Models\Humano::factory(1)->create();
        \App\Models\DiosHumano::Factory(1)->create();
        // \App\Models\Caracteristica::factory(10)->create();
        \App\Models\CaracteristicaUsuario::factory(1)->create();
        \App\Models\Pruebas\Prueba::Factory(1)->create();
        \App\Models\Pruebas\PruebaPuntual::factory(1)->create();
        \App\Models\Pruebas\PruebaOraculo::factory(1)->create();
        \App\Models\Pruebas\PruebaOraculoLibre::factory(1)->create();
        \App\Models\Pruebas\PruebaOraculoValoracion::factory(1)->create();
        \App\Models\Pruebas\PruebaOraculoEleccion::factory(1)->create();
        \App\Models\PruebaHumano::Factory(1)->create();




    }
}
