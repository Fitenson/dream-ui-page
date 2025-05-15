@props(['name'])

<x-dream-button
    @click="tab = '{{ $name }}'"
    :class="{
        'text-blue-600 border-b-2 border-blue-600 font-semibold': tab === '{{ $name }}',
        'text-gray-500 hover:text-blue-500 border-b-2 border-transparent': tab !== '{{ $name }}'
    }"
    class="bg-transparent px-4 py-2 text-sm transition-all duration-200 ease-in-out"
    type="button"
>
    {{ $slot }}
</x-dream-button>
