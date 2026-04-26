@props(['height' => 'h-6', 'hoverShift' => false])

<a href="{{ route('home') }}" @class([$height, 'w-auto']) title="{{ config('app.name') }}">
    <img src="/assets/logos/mazem3dia-white-logo.png"
        @class([$height, 'w-auto', 'transition-all duration-300 hover:[filter:sepia(1)_saturate(4)_hue-rotate(60deg)]' => $hoverShift])
        alt="{{ config('app.name') }}" />
</a>
