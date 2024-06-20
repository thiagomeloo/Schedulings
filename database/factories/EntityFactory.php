<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'avatar' => $this->faker->imageUrl(),
        ];
    }
}
