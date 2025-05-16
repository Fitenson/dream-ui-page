@props(['name'])

<div
    x-show="tab === '{{ $name }}'"
    x-cloak
    {{ $attributes->merge(['class' => '']) }}
>
    {{ $slot }}
</div>
