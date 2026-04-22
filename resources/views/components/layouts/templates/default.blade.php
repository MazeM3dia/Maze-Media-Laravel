<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head-metadata')

    {{ $styles ?? '' }}
</head>
<body class="antialiased bg-dark-900 font-body text-base lg:text-lg text-light-400 leading-normal">

    @include('partials.header')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')

    {{ $scripts ?? '' }}

</body>
</html>
