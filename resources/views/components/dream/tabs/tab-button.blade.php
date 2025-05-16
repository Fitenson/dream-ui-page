@props([
    'name',
    'active' => 'bg-black font-semibold hover:text-gray-200',
    'inactive' => 'bg-white hover:text-gray-200',
    'activeText' => 'text-white',
    'inactiveText' => 'text-black',
])

<x-dream-button
    @click="tab = '{{ $name }}'"
    x-bind:class="(tab === '{{ $name }}' ? '{{ $active }}' : '{{ $inactive }}')"
    {{ $attributes->merge([
        'class' => 'flex-1 text-center rounded-md px-4 py-2 text-sm border border-gray-200 transition-all duration-200 ease-in-out'
    ]) }}
    type="button"
>
    <span
        x-bind:class="(tab === '{{ $name }}' ? '{{ $activeText }}' : '{{ $inactiveText }}')"
    >
        {{ $slot }}
    </span>
</x-dream-button>
