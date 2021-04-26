<div class="flex border border-gray-200 rounded-lg p-5">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="mr-3 flex-shrink-0">
        <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ auth()->user()->gravatar() }}">
    </div>
    <div class="w-full">
        <div class="font-semibold mb-3 text-lg">{{ auth()->user()->name }}</div>
        <div>
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <textarea wire:model="body" class="resize-none w-full rounded-md bg-gray-50 placeholder-gray-400 border-0 focus:outline-none transition duration-150 ease-in-out @error('body') border-red-300 text-red-900 focus:border-red-300 focus:ring-red @enderror" placeholder="Write any comment . . ."></textarea>
                </div>
                <div class="flex justify-end">
                    <x-button.primary>Send</x-button.primary>
                </div>
            </form>
        </div>
    </div>
</div>
