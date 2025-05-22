<div class="text-gray-600">
    {{ $name }}

    <span class="text-red-500 font-bold">
        @if ($shout) ! @endif
    </span>

    <!-- Toggles on/off -->
    <input type="checkbox" wire:model="shout" wire:change="$refresh">

    <!-- Updates after a short delay (~150ms) or when input loses focus -->
    <input type="text" wire:model="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">

    <!-- Updates immediately on every keystroke -->
    <input type="text" wire:model.live="name"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">

    <!-- Sends update after all current actions are handled -->
    <input type="text" wire:model.defer="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">

    <!-- Updates server only when user leaves the field -->
    <input type="text" wire:model.lazy="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
</div>
