<div class="flex items-center mx-4">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 {{ $comment->isLiked() ? 'text-red-600' : '' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
    </svg>
    
    {{ $comment->likes()->count() }} &nbsp;
    <button class="focus:outline-none" wire:click="like">
        {{ Str::plural('Like', $comment->likes()->count()) }}
    </button>

</div>

