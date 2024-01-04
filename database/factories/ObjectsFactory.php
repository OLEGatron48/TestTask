<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $names = ['Дом 250м', 'Дом 130м', 'Дом 100м'];
        $descriptions = ['Хороший дом', 'Отличный дом', 'Великолепный дом'];
        $living_spaces = [200, 100, 80];
        $total_area = [250, 130, 100];

        return [
            'Picture' => $this->faker->imageUrl,
            'Name' => $names[array_rand($names, 1)],
            'Description' => $descriptions[array_rand($descriptions, 1)],
            'Price' => rand(100, 500),
            'Phone' => $this->faker->phoneNumber(10),
            'Adress' => $this->faker->streetAddress(10),
            'LivingSpaces' => $living_spaces[array_rand($living_spaces, 1)],
            'TotalArea' => $total_area[array_rand($total_area, 1)],
            'CountFloors' => rand(1, 3),
            'Floor' => null,
            'TypeID' => 1
        ];
    }
}
