<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->firstName,
            'Surname' => $this->faker->lastName,
            'Patronymic' => $this->faker->lastName,
            'Phone' => $this->faker->phoneNumber(10),
            'Adress' => $this->faker->streetAddress(10),
            'TypeID' => 1,
            'EntityID' => rand(1, 3),
            'IndividualID' => rand(1, 3),
        ];
    }
}
