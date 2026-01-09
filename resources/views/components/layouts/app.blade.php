@props(['title' => ' '])

<x-layouts.base :$title>
    
    <x-layouts.header />

    {{ $slot }}

{{-- Footer Section --}}
    <x-layouts.footer />
</x-layouts.base>