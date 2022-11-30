<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PruebaOraculo;
class PruebaOraculoValoracionFactory extends Factory
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
            'caracteristica_asociada' => rand(1,5)
        ];
    }
}
