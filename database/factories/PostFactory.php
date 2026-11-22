<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->randomElement([
            'Tips Fotografi Potret dengan Cahaya Alami',
            'Memotret Lanskap Saat Golden Hour',
            'Dasar Komposisi: Rule of Thirds',
            'Mengenal Segitiga Eksposur',
            'Street Photography di Makassar',
            'Memilih Lensa untuk Pemula',
            'Teknik Long Exposure di Pantai',
            'Editing Foto dengan Lightroom',
            'Fotografi Makanan untuk Pemula',
            'Menata Pencahayaan Studio Sederhana',
        ]);

        return [
            'title' => $title,
            'author' => 'Mellinda Anggryani',
            'slug' => Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 9999),
            'body' => implode(' ', fake()->randomElements([
                'Cahaya adalah elemen terpenting dalam fotografi.',
                'Atur ISO, aperture, dan shutter speed sesuai kondisi.',
                'Komposisi yang baik membuat foto lebih bercerita.',
                'Cobalah memotret dari sudut pandang yang tidak biasa.',
                'Golden hour memberi warna hangat yang lembut pada foto.',
                'Gunakan tripod agar hasil foto tetap tajam.',
                'Editing ringan bisa menonjolkan karakter foto.',
                'Latihan rutin adalah cara terbaik mengasah mata fotografer.',
            ], 4)),
        ];
    }
}