<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PruebaOraculo;
class PruebaOraculoLibreFactory extends Factory
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
            'id_prueba_oraculo' => $this->faker->randomElement(PruebaOraculo::get('id')),
            'palabras_asociadas' => $this->faker->text(rand(5,20)),
            'porcentaje' => rand(10,100)

        ];
    }
}
