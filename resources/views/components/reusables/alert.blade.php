@props(['type' => 'info'])

@php
    $colorClasses = match($type) {
        'success' => 'bg-lime-700 border-lime-500 text-lime-300',
        'danger'  => 'bg-danger-100 border-danger-200 text-danger-400',
        'warning' => 'bg-warning-100 border-warning-200 text-warning-400',
        default   => 'bg-info-100 border-info-200 text-info-400',
    };
@endphp

<div {{ $attributes->class(['p-4 rounded-lg leading-normal border', $colorClasses]) }}>
    {{ $slot }}
</div>
