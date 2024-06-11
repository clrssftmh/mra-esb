<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostmanList>
 */
class PostmanListFactory extends Factory
{
    public function definition()
    {
        static $me = 1;
        return [
            'no_postman' => $me++,
            'service_name' => $this->faker->name,
            'file_postman' => json_encode([
                'user' => $this->faker->name(),
                'body' => $this->faker->paragraph()
            ]),
        ];
    }
}
