<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-pt-18 lg:scroll-pt-20">
<head>
    @include('partials.head-metadata')

    {{ $styles ?? '' }}
</head>
<body class="antialiased bg-dark-900 font-body text-base lg:text-lg text-light-400 leading-normal">

    @include('partials.header')

    <main class="pt-18 lg:pt-20">
        {{ $slot }}
    </main>

    @include('partials.footer')

    {{ $scripts ?? '' }}

    @livewireScripts

</body>
</html>
