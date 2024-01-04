<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgencyDealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ObjectID' => rand(1, 3),
            'ClientID' => rand(1, 3),
            'StatusID' => 1,
        ];
    }
}
