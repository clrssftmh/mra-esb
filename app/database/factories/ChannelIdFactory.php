<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChannelId>
 */
class ChannelIdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'channel_id' => $this->faker->bothify('??-###'),
            'channel_name' => $this->faker->word(),
            'channel_desc' => $this->faker->paragraph(30),
        ];
    }
}
