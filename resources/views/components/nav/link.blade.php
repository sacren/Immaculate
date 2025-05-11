@props(['href'])

@php
    // Normalize both URLs for comparison
    $current = trim(url()->current(), '/');
    $target = trim($href, '/');

    // Match exact or as a route name
    $isActive = Str::startsWith($current, $target) || request()->routeIs($target);
@endphp

<a href="{{ $href }}" @class([
    'rounded-md px-3 py-2 text-sm font-medium',
    'bg-gray-900 text-white' => $isActive,
    'text-gray-300 hover:bg-gray-700 hover:text-white' => !$isActive,
])>
    {{ $slot }}
</a>

