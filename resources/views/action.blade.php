<x-layouts.app title="Action">
    <!-- Navigation -->
    <x-slot name="navigation">
        <x-navbar></x-navbar>
    </x-slot>

    <!-- Header -->
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">
            {{ __('Livewire') }}
        </h1>
    </x-slot>

    <!-- Main Content -->
    <div class="p-6 bg-blue-100 text-gray-800 rounded-lg shadow-md">
        <livewire:dummy></livewire:dummy>
    </div>

    <div class="mt-6 p-6 bg-blue-100 text-gray-800 rounded-lg shadow-md">
        <livewire:counter></livewire:counter>
    </div>
</x-layouts.app>
