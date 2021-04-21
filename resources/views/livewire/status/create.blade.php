<div class="border border-gray-200 mb-10 rounded-lg overflow-hidden">
    {{-- In work, do what you enjoy. --}}
    <div class="px-4 py-3 bg-gray-100 border-b border-gray-200 text-gray-700 font-semibold">
        Your Status
    </div>

    <form wire:submit.prevent="store">
        <div class="p-4 bg-gray-50">
            <textarea wire:model="body" class="resize-none w-full rounded-md bg-gray-50 placeholder-gray-400 border-0 focus:outline-none transition duration-150 ease-in-out @error('body') border-red-300 text-red-900 focus:border-red-300 focus:ring-red @enderror" placeholder="What's in your mind?"></textarea>
            @error('body')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-end px-4 py-2 bg-gray-100 border-b border-gray-200">
            <x-button.secondary>Post</x-button.secondary>
        </div>
    </form>

</div>
