<div>
    @if ($status->comments_count)
        <div class="bg-gray-50 border border-gray-200 mb-5 rounded-lg ml-5 -mt-7 mr-5">
            {{-- Close your eyes. Count to one. That is how long forever feels. --}}
            @foreach ($comments as $comment)
                <div class="flex p-5">
                    <div class="flex-shrink-0 mr-3">
                        <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $comment->user->gravatar() }}">
                    </div>
                    <div>
                        <div class="font-semibold">{{ $comment->user->name }}</div>
                        <div class="text-sm text-gray-600 mb-2">{{ $comment->created_at->diffForHumans() }}</div>
                        <div class="leading-relaxed text-gray-700">{!! nl2br($comment->body) !!}</div>
                        <div class="text-sm mt-2 text-gray-600 flex items-center">
                            <div class="mr-3">
                                {{ $comment->children_count }} {{ Str::plural('Reply', $comment->children_count) }}
                            </div>
                            <button onClick="window.location.href='#showReplyForm'" wire:click.prevent="showReplyForm({{ $comment->id }})" class="focus:outline-none">
                                Add Reply
                            </button>
                        </div>
                    </div>
                </div>
                @if ($comment->children_count)
                    <div class="ml-5 mb-5">
                        @foreach ($comment->children as $comment)
                            <div class="flex p-10 py-2">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $comment->user->gravatar() }}">
                                </div>
                                <div>
                                    <div class="font-semibold">{{ $comment->user->name }}</div>
                                    <div class="text-sm text-gray-600 mb-2">{{ $comment->created_at->diffForHumans() }}</div>
                                    <div class="leading-relaxed text-gray-700">{!! nl2br($comment->body) !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
            <div id="showReplyForm">
                <form wire:submit.prevent="reply">
                    <textarea wire:model="body" class="w-full resize-none rounded-md bg-gray-100 placeholder-gray-400 border-0 focus:shadow-none focus:outline-none transition duration-150 ease-in-out" placeholder="Reply here . . ."></textarea>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 py-2 text-center text-white w-full rounded-b-lg -mt-3">Reply</button>
                </form>
            </div>
        </div>
    @endif

</div>