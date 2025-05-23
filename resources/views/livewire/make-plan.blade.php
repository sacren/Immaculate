<div class="p-6 bg-white rounded-lg shadow-md text-gray-600">
    <!-- Display Name and ! -->
    <div class="mb-4 space-y-2">
        @foreach ($greetings as $greeting)
            <p class="text-lg font-medium">{{ $greeting }} {{ $name }}</p>
        @endforeach

        <span class="text-red-500 font-bold">
            @if ($shout)
                !
            @endif
        </span>
    </div>

    <!-- Toggle Checkbox -->
    <div class="flex items-center mb-4">
        <label for="shout" class="mr-2 text-sm font-medium">Toggle:</label>
        <input type="checkbox" id="shout" wire:model="shout" wire:change="$refresh"
            class="form-checkbox h-5 w-5 text-blue-500 border-gray-300 rounded focus:ring-blue-500">
    </div>

    <!-- Input Fields -->
    <div class="space-y-4">
        <!-- Updates after a short delay (~150ms) or when input loses focus -->
        <div class="flex flex-col">
            <label for="name-delayed" class="mb-1 text-sm font-medium">Name (Delayed Update):</label>
            <input type="text" id="name-delayed" wire:model="name" wire:change="$refresh"
                class="px-3 py-2 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Updates immediately on every keystroke -->
        <div class="flex flex-col">
            <label for="name-live" class="mb-1 text-sm font-medium">Name (Live Update):</label>
            <input type="text" id="name-live" wire:model.live="name"
                class="px-3 py-2 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Sends update after all current actions are handled -->
        <div class="flex flex-col">
            <label for="name-deferred" class="mb-1 text-sm font-medium">Name (Deferred Update):</label>
            <input type="text" id="name-deferred" wire:model.defer="name" wire:change="$refresh"
                class="px-3 py-2 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Updates server only when user leaves the field -->
        <div class="flex flex-col">
            <label for="name-lazy" class="mb-1 text-sm font-medium">Name (Lazy Update):</label>
            <input type="text" id="name-lazy" wire:model.lazy="name" wire:change="$refresh"
                class="px-3 py-2 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>
    </div>

    <!-- Dropdown Select -->
    <div class="mt-4">
        <label for="greeting" class="block mb-1 text-sm font-medium">Select Greeting:</label>
        <select id="greeting" name="greeting" wire:model="greetings" multiple wire:change="$refresh"
            class="w-full px-3 py-2 text-sm border border-green-500 rounded focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
            <option value="Hello!">Hello!</option>
            <option value="How are you?">How are you?</option>
            <option value="How do you do?">How do you do?</option>
        </select>
    </div>
</div>
