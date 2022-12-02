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
            'id_prueba_oraculo' => $this->faker->randomElement(PruebaOraculo::get('id')),
            'caracteristica_asociada' => $this->faker->randomElement(Caracteristica::get('id')),
            'valor' => rand(5,10),
            'respuesta' => $this->faker->text(rand(5,10))
        ];
    }
}
