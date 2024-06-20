<?php

namespace Database\Factories;

use App\Models\Entity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class SchedulingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'entity_id' => Entity::factory(),
            'create_by' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'schedule_at' => $this->faker->dateTime,
        ];
    }
}
