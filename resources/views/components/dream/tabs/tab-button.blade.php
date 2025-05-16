@props([
    'name',
    'active' => 'bg-blue-600 text-white font-semibold',
    'inactive' => 'bg-white text-black hover:bg-blue-50 hover:text-blue-600',
    'class' => '',
])

<x-dream-button
    @click="tab = '{{ $name }}'"
    x-bind:class="(tab === '{{ $name }}' ? '{{ $active }}' : '{{ $inactive }}') + ' {{ $class }}'"
    class="flex-1 text-center rounded-md px-4 py-2 text-sm border border-gray-200 transition-all duration-200 ease-in-out"
    type="button"
>
    {{ $slot }}
</x-dream-button>
