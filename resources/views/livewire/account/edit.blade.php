<div class="container">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="bg-gray-50 rounded border border-gray-200">
                <h1 class="capitalize text-lg text-gray-700 px-5 py-2 border-b border-gray-200 bg-gray-100 font-semibold">Update Your Profile</h1>

                <form wire:submit.prevent="update" class="p-5">
                    <div class="mb-5">
                        <div class="flex items-center">
                            @if($picture)
                                <img src="{{ $picture->temporaryUrl() }}" class="w-16 h-16 rounded-full mr-3 object-cover object-center">
                            @else
                                <img src="{{ auth()->user()->gravatar() }}" class="w-16 h-16 rounded-full mr-3 object-cover object-center">
                            @endif
                            <label for="picture" class="bg-white border border-gray-200 px-4 py-2 rounded-lg">
                                Upload Image
                                <input type="file" wire:model="picture" id="picture" class="sr-only">
                            </label>
                        </div>
                        
                        @error('picture')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="block font-medium mb-1">Username</label>
                        <input type="text" wire:model="username" id="username" class="w-full border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out @error('username') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                        @error('username')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" wire:model="name" id="name" class="w-full border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="description" class="block font-medium mb-1">Bio</label>
                        <textarea wire:model="description" id="description" class="w-full border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                        </textarea>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <x-button.primary>Update</x-button.primary>
                </form>
            </div>
        </div>
    </div>
</div>
