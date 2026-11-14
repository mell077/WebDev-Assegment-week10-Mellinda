@php
    $menu = [
        ['nama' => 'Home',    'url' => '/',            'pola' => '/'],
        ['nama' => 'About',   'url' => '/about',       'pola' => 'about'],
        ['nama' => 'Blog',    'url' => '/blog',        'pola' => 'blog'],
        ['nama' => 'Contact', 'url' => '/contact',     'pola' => 'contact'],
    ];
@endphp

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="/" class="text-xl font-bold text-indigo-600">Portofolio</a>

        <button id="menu-btn" class="md:hidden p-2 text-gray-700" aria-label="Buka menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul class="hidden md:flex gap-8 font-medium">
            @foreach ($menu as $item)
                <li>
                    <a href="{{ $item['url'] }}"
                       class="{{ request()->is($item['pola']) ? 'text-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">
                        {{ $item['nama'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <ul id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3 font-medium">
        @foreach ($menu as $item)
            <li>
                <a href="{{ $item['url'] }}"
                   class="{{ request()->is($item['pola']) ? 'text-indigo-600' : 'text-gray-600' }}">
                    {{ $item['nama'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>