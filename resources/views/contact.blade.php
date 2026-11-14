@extends('layouts.app')

@section('title', 'Kontak | Portofolio Nama Kamu')

@section('content')

    {{--HEADER--}}
    <header class="bg-indigo-600 text-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-3">Hubungi Saya</h1>
            <p class="text-indigo-100 text-lg">Ingin berkolaborasi? Kirim pesan di sini.</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-12 grid gap-10 md:grid-cols-2">

        {{--FORM--}}
        <form class="bg-white rounded-xl shadow-md p-8 space-y-5"
              onsubmit="event.preventDefault(); alert('Terima kasih! Pesanmu sudah terkirim (demo).'); this.reset();">
            <div>
                <label for="nama" class="block mb-1 font-medium">Nama</label>
                <input type="text" id="nama" required placeholder="Nama lengkap"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="email" class="block mb-1 font-medium">Email</label>
                <input type="email" id="email" required placeholder="email@contoh.com"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label for="pesan" class="block mb-1 font-medium">Pesan</label>
                <textarea id="pesan" rows="5" required placeholder="Tulis pesanmu..."
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>
            <button type="submit"
                    class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition">
                Kirim Pesan
            </button>
        </form>

        {{--INFO KONTAK--}}
        <div class="space-y-6">
            <h2 class="text-2xl font-bold">Informasi Kontak</h2>
            <div class="bg-white rounded-xl shadow-md p-6 space-y-4">
                <p><span class="font-semibold">📧 Email:</span> <a href="mailto:email@contoh.com" class="text-indigo-600 hover:underline">mellindaanggryani@gmail.com</a></p>
                <p><span class="font-semibold">📍 Lokasi:</span> Makassar, Sulawesi Selatan</p>
                <p><span class="font-semibold">📸 Instagram:</span> <a href="https://instagram.com/mellindaanggryani" target="_blank" class="text-indigo-600 hover:underline">@mellindaanggryani</a></p>
            </div>
        </div>

    </main>

@endsection