<?php

namespace Database\Factories\Pruebas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pruebas\PruebaOraculo;
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
            'palabras_clave' => $this->faker->text(rand(5,20)),
            'porcentaje' => rand(10,100)

        ];
    }
}
