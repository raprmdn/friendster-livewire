<div>
    @if ($status->comments_count)
        <div class="bg-gray-50 border border-gray-200 mb-5 rounded-lg ml-5 -mt-7 mr-5">
            {{-- Close your eyes. Count to one. That is how long forever feels. --}}
            @foreach ($comments as $comment)
                <div class="flex border-b last:border-b-0 border-gray-200 p-5">
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

</div>