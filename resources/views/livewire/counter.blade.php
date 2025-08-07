<div>
    <span class="text-gray-500">
        {{ __('Counter:') }} {{ $count }}
    </span>

    <button wire:click="increment"
        class="bg-blue-500 hover:bg-blue-700 text-white
                font-bold py-2 px-4 rounded">
        +1
    </button>

    <button wire:click="decrement"
        class="bg-red-500 hover:bg-red-700 text-white
                font-bold py-2 px-4 rounded">
        -1
    </button>

    <button wire:click="incrementBy"
        class="bg-blue-500 hover:bg-blue-700 text-white
                font-bold py-2 px-4 rounded">
        +{{ $step }}
    </button>
</div>
