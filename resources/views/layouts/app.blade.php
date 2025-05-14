<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Dream UI' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- ✅ Include Alpine.js globally --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="text-gray-900 font-sans">
    {{-- Navigation --}}
    <header id="site-header" class="fixed top-0 left-0 w-full z-50 bg-transparent text-white font-bold text-3xl p-4 transition-colors duration-500 ease-in-out">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex flex-column">
                <img src="{{ asset('logo.svg') }}" alt="Logo" class="h-16 w-16 object-scale-down" />
                <img src="{{ asset('DreamUI.svg') }}" alt="Logo" class="h-16 w-16 object-scale-down" />
            </div>

            <nav>
                <a href="/" class="px-3 hover:underline">Home</a>
                <a href="/docs" class="px-3 hover:underline">Docs</a>
                <a href="/components" class="px-3 hover:underline">Components</a>
                <a href="https://github.com/Fitenson/dream" class="px-3 hover:underline" target="_blank">GitHub</a>
            </nav>
        </div>
    </header>
    @yield('content')
</body>
</html>
<script>
    window.addEventListener('scroll', function () {
        const header = document.getElementById('site-header');
        const scrollThreshold = window.innerHeight * 0.5;

        if (window.scrollY > scrollThreshold) {
            header.classList.add('bg-sky-700', 'dark:bg-sky-900', 'opacity-100', 'pointer-events-auto');
            header.classList.remove('bg-transparent', 'opacity-0', 'pointer-events-none');
        } else {
            header.classList.remove('bg-sky-700', 'dark:bg-sky-900', 'opacity-100', 'pointer-events-auto');
            header.classList.add('bg-transparent', 'opacity-0', 'pointer-events-none');
        }
    });
</script>
