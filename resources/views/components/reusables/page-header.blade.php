@props(['heading', 'bg' => null])

<div class="relative bg-dark-950 border-b border-light-50/10 overflow-hidden">
    @if($bg)
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ $bg }}')"></div>
    @endif

    {{-- Mobile: bottom-to-top; Desktop: left-to-right (matches heading alignment) --}}
    <div class="absolute inset-0 bg-linear-to-t from-dark-950 via-dark-950/85 to-dark-950/40 lg:bg-linear-to-r"></div>

    <div class="relative container mx-auto px-6 xl:px-8 pt-32 pb-20 lg:pt-52 lg:pb-24">
        <h1 class="text-4xl lg:text-6xl font-bold text-light-100 uppercase text-center lg:text-start
            [text-shadow:0_2px_20px_rgba(0,0,0,0.8)]">
            {{ $heading }}
        </h1>
    </div>
</div>
