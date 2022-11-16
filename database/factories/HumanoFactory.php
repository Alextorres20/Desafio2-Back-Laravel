<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class HumanoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomElement(User::get('id')),
            'destino' => rand(0,100),
            'donde_murio' => $this->faker->randomElement(['Campos Eliseos', 'Tartaro', null])
        ];
    }
}
