@props(['title' => ' '])

<x-layouts.base :$title>
    
    <x-layouts.header />

    {{ $slot }}

</x-layouts.base>