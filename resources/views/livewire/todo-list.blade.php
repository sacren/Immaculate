<div>
    <h3 class="text-lg font-semibold text-gray-700 mb-2">Todo List</h3>

    <form wire:submit="add">
        <div class="flex flex-wrap gap-2 items-center">
            <div class="flex-1 min-w-0 max-w-md">
                <label for="newTodo" class="sr-only">{{ __('Add New Todo') }}</label>
                <input id="newTodo" type="text" wire:model="newTodo"
                    class="w-full px-3 py-2 bg-white border border-gray-300
                    rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('newTodo')
                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white
                    font-medium px-4 py-2 rounded transition">
                {{ __('Add') }}
            </button>
        </div>
    </form>

    <div class="mt-4">
        <ul class="list-disc pl-4 space-y-1">
            @foreach ($todos as $todo)
                <li class="text-gray-800">{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
