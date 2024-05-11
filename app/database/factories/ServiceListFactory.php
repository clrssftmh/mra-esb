<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceList>
 */
class ServiceListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id' => $this->faker->shuffleString(4),
            'service_id' => $this->faker->shuffleString(4),
            'service_name'=> $this->faker->shuffleString(10),
            'service_desc'=> $this->faker->paragraph(100),
            'service_postman' => $this->faker->paragraph(100),
            'user_id' => User::factory(),



        ];
    }
}
