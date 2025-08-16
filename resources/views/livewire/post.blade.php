<div class="py-12">
    <article class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <header class="bg-gradient-to-r from-blue-500 to-purple-600 text-white p-6">
            <h1 class="text-3xl font-bold">{{ $title }}</h1>
            <div class="mt-2 text-blue-100">
                By <span class="font-semibold">{{ $author }}</span>
            </div>
        </header>

        <div class="p-8">
            <div class="prose prose-lg max-w-none">
                <p>{{ $content }}</p>
            </div>

            <footer class="mt-8 pt-6 border-t bg-white">
                <button type="button" wire:click="addContent"
                    class="px-6 py-2 bg-blue-300 text-white font-medium rounded-lg
                        hover:bg-blue-700 transition disabled:opacity-75">
                    {{ __('Post') }}
                </button>
            </footer>
        </div>
    </article>
</div>
