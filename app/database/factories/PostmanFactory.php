<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostmanList>
 */
class PostmanFactory extends Factory
{
    public function definition()
    {
        return [
            'no_postman' => $this->faker->randomNumber(1),
            'service_name' => $this->faker->name,
            'file_postman' => [
                'user' => $this->faker->name(),
                'body' => $this->faker->paragraph()
            ],
        ];
    }
}
