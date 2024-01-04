<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IndividualClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'INN' => $this->faker->buildingNumber
        ];
    }
}
