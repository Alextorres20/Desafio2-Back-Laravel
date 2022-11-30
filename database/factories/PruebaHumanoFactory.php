<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prueba;
use App\Models\User;
class PruebaHumanoFactory extends Factory
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
            'id_humano' => $this->faker->randomElement(User::get('id'))

        ];
    }
}
