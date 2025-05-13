@extends('layouts.app')

@section('content')
    {{-- Main content --}}
    <main class="container mx-auto px-4 py-8">
        <section>
            <img src="{{ asset('background.svg') }}" alt="Background" />
            <img src="{{ asset('moon.svg') }}" alt="Background" />
            <img src="{{ asset('mountain.svg') }}" alt="Background" />
        </section>
        <div>
            <h3>Dream big. Build fast. Dream UI is your Blade UI companion</h3>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-100 text-center text-sm py-4 text-gray-600">
        &copy; {{ date('Y') }} Dream UI. Crafted by Fitenson.
    </footer>
@endsection
