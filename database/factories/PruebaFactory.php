<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PruebaFactory extends Factory
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
            'cantidad_destino' => rand(0,100)
        ];
    }
}
