<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file' => fake()->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg']),
            'title' => fake()->randomElement([
                'Golden Hour',
                'Potret Senja',
                'Pantai Losari',
                'Street Makassar',
                'Siluet',
            ]),
            'description' => fake()->randomElement([
                'Diambil saat matahari terbenam dengan cahaya hangat.',
                'Potret dengan pencahayaan alami di pagi hari.',
                'Suasana kota yang sibuk dalam satu frame.',
            ]),
        ];
    }
}