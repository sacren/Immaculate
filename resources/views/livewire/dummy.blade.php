<div>
    {{ __('The current time is') }} {{ now() }}

    <button wire:click="$refresh"
        class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Refresh</button>
</div>
