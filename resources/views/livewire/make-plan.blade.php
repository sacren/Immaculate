<div class="text-gray-600" wire:target="name">
    {{ $name }}

    <input type="text" wire:model.defer="name" wire:change="$refresh"
        class="px-3 py-1 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
</div>
