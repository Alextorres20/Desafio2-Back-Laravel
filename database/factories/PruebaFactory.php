<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PruebaFactory extends Factory
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
            'id_dios' => $this->faker->randomElement(User::get('id')),
            'cantidad_destino' => rand(0,100)
        ];
    }
}
