<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dream UI' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- ✅ Include Alpine.js globally --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    {{-- Navigation --}}
    <header id="site-header" class="fixed top-0 left-0 w-full z-50 bg-transparent text-white font-bold text-xl p-4 transition-colors duration-500 ease-in-out">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex flex-column">
                <img src="{{ asset('logo.svg') }}" alt="Logo" class="h-8 w-8 object-scale-down" />
                <img src="{{ asset('DreamUI.svg') }}" alt="Logo" class="h-8 w-8 object-scale-down" />
            </div>

            <nav>
                <a href="/" class="px-3 hover:underline">Home</a>
                <a href="/docs" class="px-3 hover:underline">Docs</a>
                <a href="/components" class="px-3 hover:underline">Components</a>
                <a href="https://github.com/Fitenson/dream" class="px-3 hover:underline" target="_blank">GitHub</a>
            </nav>
        </div>
    </header>

    {{-- Fullscreen Background Layers --}}
    <div class="relative w-full h-screen overflow-hidden bg-black">
        {{-- Background Layer with Night Filter --}}
        <img src="{{ asset('background.svg') }}"
             alt="Background"
             class="absolute inset-0 w-full h-full object-cover z-0 brightness-25 saturate-25" />

        {{-- Moon Layer (kept bright) --}}
        <img src="{{ asset('moon.svg') }}"
             id="parallax-moon"
             alt="Moon"
             class="absolute top-10 right-10 w-32 h-32 object-contain z-10 drop-shadow-lg" />

        {{-- Mountain Layer with Night Filter --}}
        <img src="{{ asset('mountain.svg') }}"
             id="parallax-mountain"
             alt="Mountain"
             class="absolute bottom-0 left-0 w-full object-cover z-20 brightness-50 saturate-25" />

        {{-- Foreground Text --}}
        <div class="relative z-30 flex items-center justify-center min-h-screen text-white text-center px-4 flex-col">
            <h3 class="text-5xl text-sky-800 md:text-3xl font-bold max-w-4xl my-2 mx-2">
                Dream big. Build fast
            </h3>
            <h4 class="text-3xl md:text-2xl text-gray-200 my-2 mx-2">Dream UI is your Blade UI companion</h4>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-center text-sm py-4 text-gray-400">
        &copy; {{ date('Y') }} Dream UI. Crafted by Fitenson.
    </footer>
</body>
</html>
<script>
    const header = document.getElementById('site-header');
    const scrollThreshold = window.innerHeight * 0.5;

    window.addEventListener('scroll', function () {
        if (window.scrollY > scrollThreshold) {
            // Add background when scrolled past 50%
            header.classList.add('bg-sky-700', 'dark:bg-sky-900');
            header.classList.remove('bg-transparent');
        } else {
            // Revert to transparent background
            header.classList.remove('bg-sky-700', 'dark:bg-sky-900');
            header.classList.add('bg-transparent');
        }
    });
</script>
