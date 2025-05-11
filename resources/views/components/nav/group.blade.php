@props(['mobile' => false])

@if ($mobile)
    <div class="sm:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2">
            {{ $slot }}
        </div>
    </div>
@else
    <div class="hidden sm:ml-6 sm:block">
        <div class="flex space-x-4">
            {{ $slot }}
        </div>
    </div>
@endif

