<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        $image = 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F25fc9d11-9669-43f0-beb4-ee69a600780f-e5367f42df76a700420320339e0037ef.jpg';

        $data = [
            ['Church Photography', 'Church', 'Mendokumentasikan momen ibadah dan kegiatan gereja.'],
            ['Event Photography', 'Event', 'Mengabadikan momen penting dalam berbagai acara.'],
            ['Street Photography', 'Street', 'Mengabadikan cerita dari kehidupan sehari-hari.'],
            ['Portrait Session', 'Portrait', 'Potret dengan fokus pada ekspresi dan karakter.'],
            ['Wedding Moments', 'Wedding', 'Momen bahagia dari hari pernikahan.'],
            ['Nature & Landscape', 'Landscape', 'Keindahan alam dan pemandangan.'],
            ['Food Photography', 'Food', 'Foto makanan dengan pencahayaan yang menarik.'],
            ['Graduation Day', 'Event', 'Dokumentasi momen kelulusan.'],
            ['Family Portrait', 'Portrait', 'Potret keluarga yang hangat dan natural.'],
            ['Night Photography', 'Street', 'Eksplorasi cahaya kota di malam hari.'],
        ];

        foreach ($data as $item) {
            Home::create([
                'title'       => $item[0],
                'category'    => $item[1],
                'description' => $item[2],
                'image_url'   => $image,
            ]);
        }
    }
}