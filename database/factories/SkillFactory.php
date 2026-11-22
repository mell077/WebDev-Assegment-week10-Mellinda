<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->randomElement([
                'Teknik Kamera',
                'Editing',
                'Pencahayaan',
                'Soft Skills',
            ]),
            'name' => fake()->unique()->randomElement([
                'Eksposur Manual',
                'Komposisi',
                'Fokus Cepat',
                'Lightroom',
                'Photoshop',
                'Color Grading',
                'Natural Light',
                'Studio Lighting',
                'Komunikasi',
                'Manajemen Waktu',
            ]),
        ];
    }
}