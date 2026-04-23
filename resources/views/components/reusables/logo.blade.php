@props(['height' => 'h-6'])

<a href="{{ route('home') }}" @class([$height, 'w-auto']) title="{{ config('app.name') }}">
    <img src="/assets/logos/mazem3dia-white-logo.png" @class([$height, 'w-auto']) alt="{{ config('app.name') }}" />
</a>
