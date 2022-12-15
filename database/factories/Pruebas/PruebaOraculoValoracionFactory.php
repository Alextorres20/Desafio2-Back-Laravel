<?php

namespace Database\Factories\Pruebas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pruebas\PruebaOraculo;
use App\Models\Caracteristica;
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
            'id' => $this->faker->randomElement(PruebaOraculo::get('id')),
            'id_caracteristica' => $this->faker->randomElement(Caracteristica::get('id'))
        ];
    }
}
