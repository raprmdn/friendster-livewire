<div class="container">
    {{-- Care about people's approval and you will be their prisoner. --}}
   <div class="bg-white p-5 rounded-lg border border-gray-200 w-full sm:w-1/2 sm:mx-auto text-center">
        <div class="text-grey-700">
            <div class="text-xl font-bold mb-5">
                Are u sure want delete this status?
            </div>

            <div class="flex items-start border border-gray-200 rounded-lg p-4 mb-5 bg-gray-50">
                <img src="{{ $status->user->gravatar() }}" class="mr-3 w-16 h-16 object-cover object-center rounded-full">
                <div class="text-left">
                    <div class="text-sm text-gray-400 mb-3">{{ $status->published }}</div>
                    <div class="text-gray-800 leading-relaxed">{!! nl2br($status->body) !!}</div>
                    <div class="text-sm text-gray-400 mt-4 flex items-center -mx-4">
                        <div class="flex items-center mx-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            23 Comments
                        </div>
                        <div class="flex items-center mx-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            2323 Likes
                        </div>
                    </div>
                </div>
            </div>

            <button wire:click.prevent="destroy" class="text-white border border-red-500 shadow bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-center inline-block">Delete</button>
            <a class="border border-gray-200 shadow bg-white hover:bg-gray-100 px-4 py-2 rounded-lg text-center inline-block" href="{{ route('status.show', $status->hash) }}">Cancel</a>
        </div>
    </div>
</div>
