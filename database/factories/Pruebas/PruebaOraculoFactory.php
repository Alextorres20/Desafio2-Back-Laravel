<?php

namespace Database\Factories\Pruebas;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pruebas\Prueba;
class PruebaOraculoFactory extends Factory
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
            'tipo' => $this->faker->randomElement(['Respuesta libre', 'Valoracion', 'Eleccion']),
            'pregunta' => $this->faker->text(rand(5,10))
        ];
    }
}
