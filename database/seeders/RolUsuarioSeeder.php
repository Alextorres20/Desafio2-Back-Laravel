<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolUsuarioSeeder extends Seeder
{//Alejandro
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\RolUsuario::factory(2)->create();
    }
}
