<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['title' => 'Church Photography',   'author' => 'Mellinda', 'description' => 'Mengabadikan momen ibadah hari Sabtu dan Minggu.',        'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F1f839883-5b7c-426e-8f2d-062c28ff6c02-5ccccd97c9ef939f87852b30c29545fa.jpg'],
            ['title' => 'Event Photography',    'author' => 'Mellinda', 'description' => 'Dokumentasi acara kampus dan komunitas.',                  'image' => 'https://i.pinimg.com/1200x/2b/39/d8/2b39d88a37580d56a093e361944b7704.jpg'],
            ['title' => 'Portrait Photography', 'author' => 'Mellinda', 'description' => 'Potret yang menangkap karakter dan ekspresi.',            'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F1f839883-5b7c-426e-8f2d-062c28ff6c02-5ccccd97c9ef939f87852b30c29545fa.jpg'],
            ['title' => 'Street Photography',   'author' => 'Mellinda', 'description' => 'Cerita sehari-hari dari sudut kota Makassar.',            'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg'],
            ['title' => 'Anggota Media ISU',    'author' => 'Mellinda', 'description' => 'Bergabung di tim media untuk dokumentasi kegiatan.',      'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F1f839883-5b7c-426e-8f2d-062c28ff6c02-5ccccd97c9ef939f87852b30c29545fa.jpg'],
            ['title' => 'Koordinator Media',    'author' => 'Mellinda', 'description' => 'Memimpin divisi media di UKM dan FDU Kristen.',            'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F1f839883-5b7c-426e-8f2d-062c28ff6c02-5ccccd97c9ef939f87852b30c29545fa.jpg'],
            ['title' => 'Editing Foto',         'author' => 'Mellinda', 'description' => 'Color grading dan retouching dasar untuk hasil akhir.',   'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg'],
            ['title' => 'Komposisi & Cahaya',   'author' => 'Mellinda', 'description' => 'Belajar memanfaatkan cahaya alami dan framing.',          'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg'],
            ['title' => 'Pendidikan',           'author' => 'Mellinda', 'description' => 'Mahasiswa Informatika, Universitas Ciputra Makassar.',    'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg'],
            ['title' => 'Tujuan',               'author' => 'Mellinda', 'description' => 'Menghadirkan kembali momen berharga lewat foto.',         'image' => 'https://pictureurl.com/api/storage/file?key=u%2Fanon%2F3db7817d-b0ae-41c6-87ab-71c88dea599e-419b7e1e97a97121a283bf9f3f5ad2a6.jpg'],
        ];

        foreach ($data as $item) {
            About::create($item);
        }
    }
}