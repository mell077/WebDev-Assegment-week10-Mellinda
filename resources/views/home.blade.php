@extends('layouts.app')

@section('title', 'Home | Portofolio Nama Kamu')

@section('content')

    @php
        // Ambil data dari tabel table_home kalau route tidak mengirim $homes
        $homes = $homes ?? \Illuminate\Support\Facades\DB::table('table_home')->get();
    @endphp

    {{--HERO--}}
    <header class="bg-indigo-600 text-white">
        <div class="max-w-6xl mx-auto px-6 py-20 flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2 text-center md:text-left">
                <p class="text-indigo-200 mb-2">Halo, saya</p>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Mellinda</h1>
                <p class="text-lg text-indigo-100 mb-8">
                    Seorang fotografer yang suka mengabadikan momen dan melihat cerita di balik setiap foto.
                </p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="/blog" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg hover:bg-indigo-50 transition">Lihat Blog</a>
                    <a href="/contact" class="border border-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">Hubungi Saya</a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://pictureurl.com/api/storage/file?key=u%2Fanon%2Ff2e53063-834d-4e36-b60c-064fa09c8973-image.png" alt="Foto profil"
                     class="w-56 h-56 md:w-72 md:h-72 rounded-full object-cover border-4 border-white shadow-xl">
            </div>
        </div>
    </header>

    {{--SKILL--}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-2">Yang Saya Pelajari</h2>
        <p class="text-center text-gray-500 mb-10">Beberapa bidang fotografi yang sedang dipelajari.</p>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">📸</div>
                <h3 class="text-xl font-semibold mb-2">Photography</h3>
                <p class="text-gray-600">Mengabadikan momen melalui foto.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">💡</div>
                <h3 class="text-xl font-semibold mb-2">Composition & Lighting</h3>
                <p class="text-gray-600">Memahami komposisi dan pencahayaan dalam fotografi.</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-xl transition">
                <div class="text-4xl mb-3">🎨</div>
                <h3 class="text-xl font-semibold mb-2">Canva</h3>
                <p class="text-gray-600">Membuat desain kreatif menggunakan Canva.</p>
            </div>
        </div>
    </section>

    {{--PROYEK--}}
    <section class="max-w-6xl mx-auto px-6 pb-8">
        <h2 class="text-3xl font-bold text-center mb-2">Proyek Saya</h2>
        <p class="text-center text-gray-500 mb-10">Beberapa proyek fotografi yang pernah dikerjakan.</p>

        <div class="grid gap-6 md:grid-cols-3">
            @forelse ($homes as $home)
                <article class="bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="{{ $home->image_url }}" alt="{{ $home->title }}" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <span class="text-xs text-indigo-600 font-semibold">{{ $home->category }}</span>
                        <h3 class="font-semibold text-lg mb-1">{{ $home->title }}</h3>
                        <p class="text-gray-600 text-sm">{{ $home->description }}</p>
                    </div>
                </article>
            @empty
                <p class="text-center text-gray-500 md:col-span-3">Belum ada data.</p>
            @endforelse
        </div>
    </section>

    {{--DAFTAR KARYA--}}
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-2">Daftar Karya</h2>
        <p class="text-center text-gray-500 mb-10">Data diambil dari database.</p>

        <div class="overflow-x-auto bg-white rounded-xl shadow-md">
            <table class="w-full text-left">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Kategori</th>
                        <th class="px-4 py-3">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($homes as $home)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-semibold">{{ $home->title }}</td>
                            <td class="px-4 py-3">{{ $home->category }}</td>
                            <td class="px-4 py-3 text-gray-600">{{ $home->description }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-gray-500">Belum ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

@endsection