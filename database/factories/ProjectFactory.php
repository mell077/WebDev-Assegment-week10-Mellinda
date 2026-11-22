<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Seri Potret Senja',
                'Makassar Street Story',
                'Pre-wedding Outdoor',
                'Foto Produk Kuliner',
            ]),
            'subtitle' => fake()->randomElement([
                'Personal project',
                'Klien freelance',
                'Tugas kampus',
            ]),
            'image' => 'project.jpg',
            'image_alt' => 'Foto hasil proyek fotografi',
            'description' => 'Proyek fotografi dengan fokus pada pencahayaan alami dan komposisi.',
            'tools' => implode(', ', fake()->randomElements(
                ['Lightroom', 'Photoshop', 'Canon EOS', 'Sony A7'],
                2
            )),
        ];
    }
}