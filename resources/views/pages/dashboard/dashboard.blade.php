@extends('layouts.app')

@section('content')
    {{-- Fullscreen Background Layers --}}
    <div class="relative w-full h-screen overflow-x-hidden">
        {{-- Background Layer --}}
        <img src="{{ asset('background.svg') }}" alt="Background" class="absolute inset-0 w-full h-full object-cover z-0" />

        {{-- Moon Layer --}}
        <img src="{{ asset('moon.svg') }}" alt="Moon" class="absolute top-10 right-10 w-32 h-32 object-contain z-10" />

        {{-- Mountain Layer --}}
        <img src="{{ asset('mountain.svg') }}" alt="Mountain" class="absolute bottom-0 left-0 w-full object-cover z-20" />

        {{-- Foreground Text --}}
        <div class="relative z-30 flex items-center justify-center min-h-screen text-white text-center px-4">
            <h3 class="text-3xl md:text-5xl font-bold max-w-4xl flex flex-column justify-center items-center">
                <span class="text-5xl text-blue-600">Dream big. Build fast</span>
                <span class="text-3xl">Dream UI is your Blade UI companion</span>
            </h3>
        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-gray-100 text-center text-sm py-4 text-gray-600">
        &copy; {{ date('Y') }} Dream UI. Crafted by Fitenson.
    </footer>
@endsection
