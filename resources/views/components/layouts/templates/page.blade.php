@props(['title' => null, 'heading' => null, 'bg' => null])

<x-layouts.templates.default :title="$title">
    <x-slot:styles>{{ $styles ?? '' }}</x-slot:styles>

    @if($heading)
    <x-reusables.page-header :heading="$heading" :bg="$bg" />
    @endif

    <div class="container mx-auto px-4 lg:px-6 xl:px-8 py-8 lg:py-12">
        {{ $slot }}
    </div>

    <x-slot:scripts>{{ $scripts ?? '' }}</x-slot:scripts>
</x-layouts.templates.default>
