<div class="text-gray-600" wire:target="name">
    {{ $name }}

    <!-- Sends update after all current actions are handled -->
    <input type="text" wire:model.defer="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">

    <!-- Updates server only when user leaves the field -->
    <input type="text" wire:model.lazy="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
</div>
