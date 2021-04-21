<div class="border border-gray-400 mb-5 rounded-lg overflow-hidden">
    {{-- In work, do what you enjoy. --}}
    <div class="p-4 bg-gray-200 text-gray-700">
        Your Status
    </div>

    <div class="card-body p-4">
        <form wire:submit.prevent="store">
            <textarea rows="5" wire:model="body" class="resize-none w-full border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out @error('body') border-red-300 text-red-900 focus:border-red-300 focus:ring-red @enderror" placeholder="What's in your mind?"></textarea>
            @error('body')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            <div class="flex justify-end">
                <x-button.primary>Post</x-button.primary>
            </div>
        </form>
    </div>

</div>
