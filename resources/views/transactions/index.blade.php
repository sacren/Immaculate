<x-layouts.app title="Transactions">
    <!-- Navigation -->
    <x-slot name="navigation">
        <x-navbar></x-navbar>
    </x-slot>

    <!-- Header -->
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">
            {{ __('Transactions') }}
        </h1>
    </x-slot>

    <!-- Main Content -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-6 mb-6">
            <p class="text-gray-600">This is the transactions content area.</p>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6 mt-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-6 mb-6">
            <livewire:make-plan :name="$name"></livewire:make-plan>
        </div>
    </div>
</x-layouts.app>
