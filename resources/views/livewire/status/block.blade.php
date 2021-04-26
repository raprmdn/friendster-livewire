<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex w-full" wire:poll.5000ms>
        <div class="flex-shrink-0 mr-3">
            <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}">
                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}">
            </a>
        </div>
        <div class="w-full relative">
            <div class="flex justify-between" x-data="{ dropdownStatus: false }">
                <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}" class="font-semibold text-gray-900 hover:underline">{{ $status->user->name }}</a>
                @can('update', $status)
                    <button @click="dropdownStatus = !dropdownStatus" class="hover:bg-gray-100 p-1 rounded-full focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div :class="{ 'hidden': !dropdownStatus }" class="bg-white border border-gray-200 rounded-lg py-2 w-48 text-sm absolute right-0 top-0 mt-8">
                        <a href="{{ route('status.edit', $status->hash) }}" class="block px-3 py-1 hover:bg-gray-100 text-gray-600 hover:text-gray-800">Edit Status</a>
                        <a href="{{ route('status.delete', $status->hash) }}" class="block px-3 py-1 hover:bg-gray-100 text-gray-600 hover:text-gray-800">Remove Status</a>
                    </div>
                @endcan
            </div>
            <a href="{{ route('status.show', $status->hash) }}">
                <div class="text-sm text-gray-400 mb-3">{{ $status->published }}</div>
                <div class="text-gray-800 leading-relaxed">{!! nl2br($status->body) !!}</div>
                <div class="text-sm text-gray-400 mt-4 flex items-center -mx-4">
                    <div class="flex items-center mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <a href="#showReplyForm">
                            {{ $status->comments_count }} {{ Str::plural('Comment', $status->comments_count) }}
                        </a>
                    </div>
                    <div class="flex items-center mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        2323 Likes
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
