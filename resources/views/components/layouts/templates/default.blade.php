<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head-metadata')

    {{ $styles ?? '' }}
</head>
<body>

    @include('partials.header')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')

    {{ $scripts ?? '' }}

</body>
</html>
