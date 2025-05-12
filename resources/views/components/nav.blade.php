@props(['class' => ''])

<nav class="bg-gray-800 {{ $class }}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            {{ $slot }}
        </div>
    </div>
</nav>
