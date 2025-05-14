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
            <x-button type="link" to="/docs" class="block bg-gray-100 hover:bg-gray-200 text-left w-full">Introduction</x-button>
            <x-button type="link" to="/docs/installation" class="block bg-gray-100 hover:bg-gray-200 text-left w-full">Installation</x-button>
            <x-button type="link" to="/docs/components" class="block bg-gray-100 hover:bg-gray-200 text-left w-full">Components</x-button>
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
    <main class="flex-1 ml-0 md:ml-64 px-6 py-10 bg-gray-50">
        <div class="prose prose-sky max-w-4xl">
            <p class="text-lg leading-relaxed">
                Welcome to <strong>Dream UI</strong>! This guide will help you quickly understand how to use the library.
            </p>

            <h2 class="mt-8">Introduction</h2>
            <p>
                Dream UI is a Blade-based UI framework built to help you build Laravel apps faster with reusable components.
            </p>

            <h2 class="mt-8">Features</h2>
            <ul class="list-disc list-inside">
                <li>Pre-built components</li>
                <li>Alpine.js integration</li>
                <li>Tailwind CSS styling</li>
                <li>Fast prototyping</li>
            </ul>

            <h2 class="mt-8">Requirements</h2>
            <ul class="list-disc list-inside">
                <li>Laravel 8+</li>
                <li>Tailwind CSS</li>
                <li>Node.js and npm</li>
            </ul>

            <h2 class="mt-8">Next Steps</h2>
            <p>
                Continue to the <a href="/docs/installation" class="text-sky-600 font-medium hover:underline">Installation</a> page to set up Dream UI in your project.
            </p>
        </div>
    </main>

</div>
@endsection
