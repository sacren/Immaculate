<div>
    <h3 class="text-lg font-semibold text-gray-700 mb-2">Todo List</h3>

    <div class="flex flex-wrap gap-2 items-center">
        <div class="flex-1 min-w-0 max-w-md">
            <input type="text" wire:model="newTodo"
                class="w-full px-3 py-2 bg-white border border-gray-300
                rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="button" wire:click="add"
            class="bg-blue-500 hover:bg-blue-600 text-white
            font-medium px-4 py-2 rounded transition">
            {{ __('Add') }}
        </button>
    </div>

    <div class="mt-4">
        <ul class="list-disc pl-4 space-y-1">
            @foreach ($todos as $todo)
                <li class="text-gray-800">{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
</div>
