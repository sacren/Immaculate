<x-layouts.app title="Dashboard">
    <!-- Navigation -->
    <x-slot name="navigation">
        <x-navbar></x-navbar>
    </x-slot>

    <!-- Header -->
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <!-- Main Content -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 mt-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">Welcome back!</h2>
            <p class="text-gray-600">This is your dashboard content area.</p>
        </div>
    </div>
</x-layouts.app>
