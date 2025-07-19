@props([
    'title',
    'desc',
    'url',
    'icon',
    'label' => 'En savoir plus',
    'device' => 'desktop',
])

@php
    $isMobile = $device === 'mobile'
@endphp

<div class="{{ $isMobile ? 'carousel-card' : 'w-full' }} card-service group">
    <div class="mb-4 flex justify-center">
        <x-dynamic-component :component="$icon" class="card-service-svg" />
    </div>
    <h3 class="card-service-title">
        {{ $title }}
    </h3>
    <p class="mb-4">
        {{ $desc }}
    </p>
    <a href="{{ url($url) }}"
       class="card-service-btn"
       title="{{ $label }} – {{ $title }}">
        {{ $label }}
    </a>
</div>
