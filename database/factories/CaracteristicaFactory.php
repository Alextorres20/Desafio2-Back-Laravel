<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CaracteristicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->randomElement(['sabiduria', 'nobleza', 'virtud', 'maldad', 'audacia'])
        ];
    }
}
