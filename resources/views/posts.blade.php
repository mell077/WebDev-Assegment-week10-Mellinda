@extends('layouts.app')

@section('title', 'Posts | Portofolio')

@section('content')

    <section class="max-w-4xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-center mb-2">Blog Fotografi</h2>
        <p class="text-center text-gray-500 mb-10">Data diambil dari database (hasil factory).</p>

        @forelse ($posts as $post)
            <article class="py-8 border-b border-gray-300">
                <h3 class="mb-1 text-2xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h3>

                <div class="text-base text-gray-500">
                    {{ $post->author }} | {{ $post->created_at->diffForHumans() }}
                </div>

                <p class="my-4 font-light">{{ \Illuminate\Support\Str::limit($post->body, 100) }}</p>
            </article>
        @empty
            <p class="text-center text-gray-500">Belum ada data.</p>
        @endforelse
    </section>

@endsection