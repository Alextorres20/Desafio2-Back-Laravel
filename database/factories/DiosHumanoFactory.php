<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dios;
use App\Models\Humano;
class DiosHumanoFactory extends Factory
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
            'id_dios' => $this->faker->randomElement(Dios::get('id')),
            'id_humano' => $this->faker->randomElement(Humano::get('id'))
        ];
    }
}
