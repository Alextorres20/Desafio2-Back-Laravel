<?php

namespace Database\Factories\Pruebas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pruebas\Prueba;
use App\Models\Caracteristica;
class PruebaPuntualFactory extends Factory
{//Alejandro
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_prueba' => $this->faker->randomElement(Prueba::get('id')),
            'descripcion' => $this->faker->text(rand(10,100)),
            'id_caracteristica' => $this->faker->randomElement(Caracteristica::get('id')),
            'dificultad' => rand(0, 100)

        ];
    }
}
