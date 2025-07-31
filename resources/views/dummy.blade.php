<x-layouts.app title="Dummy">
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
    <livewire:dummy></livewire:dummy>
</x-layouts.app>
