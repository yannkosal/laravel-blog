@props(['active', 'navigate'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-500 text-sm font-medium leading-5 text-red-500 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-red-700 hover:border-red-300 focus:outline-none focus:text-red-700 focus:border-red-300 transition duration-150 ease-in-out';
@endphp

<a {{ $navigate ?? true ? 'wire:navigate' : '' }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
