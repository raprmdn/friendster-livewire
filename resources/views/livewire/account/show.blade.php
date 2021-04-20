<div class="bg-gray-700 py-10 -mt-12">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container">
        <div class="flex items-start">
            <div class="flex-shrink-0 mr-3">
                <img class="w-16 h-16 object-cover object-center rounded-full" src="{{ $user->gravatar() }}">
            </div>
            <div>
                <h1 class="font-semibold text-xl text-white mb-2">{{ $user->name }}</h1>
                <div class="text-gray-400 mb-5">
                    <div>
                        {{ $user->description }}
                    </div>
                    <div>
                        Joined Since : {{ $user->created_at->format("d F, Y") }}
                    </div>
                </div>
                <x-button.primary>Follow</x-button.primary>
                {{-- <x-button.error>Unfollow</x-button.error> --}}
            </div>
        </div>
    </div>
</div>
