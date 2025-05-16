@extends('layouts.app')

@section('content')
<div x-data="{ open: false }" class="flex min-h-screen bg-gray-50 text-gray-900 items-start">

    {{-- Sidebar --}}
    <aside
        class="w-64 bg-white shadow-md z-40 overflow-y-auto
               fixed md:sticky md:top-0 h-screen md:h-auto md:self-start
               transition-transform transform md:translate-x-0">

        <div class="p-4 font-bold text-xl text-sky-700 border-b h-16 flex items-center">
            <a href="/docs">📘 Dream UI Docs</a>
        </div>

        <nav class="px-4 py-2 space-y-2 text-sm">
            <a href="/docs/intro" class="block hover:text-sky-600 font-semibold text-sky-700">Getting Started</a>
            <x-dream-button onclick="showDocs('intro-docs')" class="block bg-gray-100 hover:bg-gray-200 text-left w-full">Introduction</x-dream-button>
            <x-dream-button class="block bg-gray-100 hover:bg-gray-200 text-left w-full">Installation</x-dream-button>
            <section class="flex flex-col space-y-2">
                <x-dream-label class="text-gray-800 font-bold text-2xl sm:text-base md:text-xl" for="components">Components</x-dream-label>
                <x-dream-button onclick="showDocs('button-docs')">Button</x-dream-button>
                <x-dream-button onclick="showDocs('label-docs')">Label</x-dream-button>
                <x-dream-button onclick="showDocs('input-docs')">Input</x-dream-button>
            </section>
        </nav>
    </aside>

    {{-- Mobile Menu Toggle --}}
    <button @click="open = !open"
            class="md:hidden fixed top-4 left-4 z-50 bg-white p-2 rounded-full shadow">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    {{-- Main Content --}}
    <main class="flex-1 py-10 bg-gray-50 mx-4">
        @include('partials.intro')
        @include('partials.button_docs')
    </main>

</div>
@endsection
<script>
    function showDocs(id) {
        // Hide all doc sections
        document.querySelectorAll('section[id$="-docs"]').forEach(el => el.classList.add('hidden'));

        // Show the selected doc
        document.getElementById(id).classList.remove('hidden');
    }
</script>
