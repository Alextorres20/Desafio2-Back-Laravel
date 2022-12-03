<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Caracteristica;
class CaracteristicaUsuarioFactory extends Factory
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
            'id_usuario' => $this->faker->randomElement(User::get('id')),
            'id_caracteristica' => $this->faker->randomElement(Caracteristica::get('id')),
            'valor' => rand(1,5)
        ];
    }
}
