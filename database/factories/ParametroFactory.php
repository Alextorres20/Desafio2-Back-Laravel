<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class ParametroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {//Alejandro
        return [
            //
            'nombre' => $this->faker->name(),
            'valor' => rand(0,100),
            'modificado_por' => $this->faker->randomElement(User::get('id'))
        ];
    }
}
