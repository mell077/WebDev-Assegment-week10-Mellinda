<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $image = 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F25fc9d11-9669-43f0-beb4-ee69a600780f-e5367f42df76a700420320339e0037ef.jpg';

        $data = [
            ['Symphony Worship Makassar', 'April 2025', 'Dokumentasi suasana ibadah dan momen-momen berkesan yang diabadikan melalui lensa kamera.'],
            ['Makassar for Jesus', '22 Oktober 2025', 'Dokumentasi momen pujian, penyembahan, dan suasana acara melalui fotografi.'],
            ['Akumuda Worship Rally', '17 & 24 April 2026', 'Mengabadikan berbagai momen selama kegiatan, mulai dari suasana panggung hingga interaksi jemaat.'],
            ['Retreat Pemuda', 'Juni 2025', 'Cerita dan potret kebersamaan selama retreat pemuda.'],
            ['Natal Kampus', 'Desember 2025', 'Dokumentasi perayaan Natal bersama mahasiswa.'],
            ['Paskah Bersama', 'April 2026', 'Momen ibadah Paskah dan kebersamaan setelahnya.'],
            ['Potret Wisuda', 'Agustus 2025', 'Sesi foto wisuda dengan ekspresi bahagia para lulusan.'],
            ['Jalan-jalan Pantai Losari', 'September 2025', 'Street photography di sore hari sekitar Pantai Losari.'],
            ['Workshop Fotografi', 'Februari 2026', 'Catatan dari workshop komposisi dan pencahayaan.'],
            ['Behind the Lens', 'Maret 2026', 'Cerita di balik layar dan peralatan yang saya pakai.'],
        ];

        foreach ($data as $item) {
            Blog::create([
                'title'       => $item[0],
                'date'        => $item[1],
                'description' => $item[2],
                'image'       => $image,
            ]);
        }
    }
}