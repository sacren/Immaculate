<!-- Navigation -->
<x-nav>
    <!-- Mobile Toggle Button -->
    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button @click="open = !open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Open main menu</span>
            <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Desktop Nav Links -->
    <div class="hidden sm:flex sm:items-center sm:justify-start">
        <x-nav.group>
            <x-nav.link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">Dashboard</x-nav.link>
            <x-nav.link href="{{ route('transactions.index') }}" :active="request()->routeIs('transactions.*')">Transactions</x-nav.link>
            <x-nav.link href="{{ route('categories') }}" :active="request()->routeIs('categories')">Categories</x-nav.link>
        </x-nav.group>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" @click.away="open = false" class="sm:hidden" x-transition>
        <x-nav.group mobile>
            <x-nav.link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" @click="open = false">Dashboard</x-nav.link>
            <x-nav.link href="{{ route('transactions.index') }}" :active="request()->routeIs('transactions.*')"
                @click="open = false">Transactions</x-nav.link>
            <x-nav.link href="{{ route('categories') }}" :active="request()->routeIs('categories')" @click="open = false">Categories</x-nav.link>
        </x-nav.group>
    </div>
</x-nav>

