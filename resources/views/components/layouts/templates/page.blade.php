@props(['title' => null])

<x-layouts.templates.default :title="$title">
    <x-slot:styles>{{ $styles ?? '' }}</x-slot:styles>
    {{ $slot }}
    <x-slot:scripts>{{ $scripts ?? '' }}</x-slot:scripts>
</x-layouts.templates.default>
