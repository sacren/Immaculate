<div>
    <h3 class="text-lg font-semibold text-gray-700 mb-2">Todo List</h3>

    <ul class="list-disc pl-4 space-y-1">
        @foreach ($todos as $todo)
            <li class="text-gray-800">{{ $todo }}</li>
        @endforeach
    </ul>
</div>
