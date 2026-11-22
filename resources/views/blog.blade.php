@extends('layouts.app')

@section('title', 'Blog | Portofolio Nama Kamu')

@section('content')

    @php
        // Ambil data dari tabel table_blog kalau route tidak mengirim $table_blog
        $table_blog = $table_blog ?? \Illuminate\Support\Facades\DB::table('table_blog')->get();
    @endphp

    {{-- HEADER --}}
    <header class="bg-indigo-600 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Blog Saya</h1>
            <p class="text-indigo-100 text-lg">Cerita atau makna di balik foto yang diabadikan.</p>
        </div>
    </header>

    {{-- DAFTAR ARTIKEL --}}
    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            @forelse ($table_blog as $table)
                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                    <img src="{{ $table->image }}" alt="{{ $table->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">{{ $table->category ?? '' }}</span>
                        <h2 class="text-xl font-semibold mt-1 mb-2">{{ $table->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ $table->description }}</p>
                        <a href="#" class="text-indigo-600 font-medium hover:underline">Baca selengkapnya &rarr;</a>
                    </div>
                </article>
            @empty
                <p class="text-center text-gray-500 md:col-span-3">Belum ada artikel.</p>
            @endforelse

        </div>
    </main>

@endsection