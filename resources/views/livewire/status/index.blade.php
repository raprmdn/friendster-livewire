<div>
    {{-- In work, do what you enjoy. --}}
    @foreach ($statuses as $status)
        <a href="#" class="flex mb-5" wire:poll.5000ms>
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}">
            </div>
            <div>
                <div class="font-semibold text-gray-900">{{ $status->user->name }}</div>
                <div class="text-gray-800">{{ $status->body }}</div>
                <div class="text-sm text-gray-400">{{ $status->published }}</div>
            </div>
        </a>
    @endforeach

    @if($statuses->hasMorePages())
        <div class="flex justify-center">
            <x-button.primary wire:click.prevent="loadMore">
                <span wire:loading>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="25px" height="25px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#2cc83e" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round"> <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform> </circle> <circle cx="50" cy="50" r="23" stroke-width="8" stroke="#0b00f7" stroke-dasharray="36.12831551628262 36.12831551628262" stroke-dashoffset="36.12831551628262" fill="none" stroke-linecap="round"> <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 50 50;-360 50 50"></animateTransform> </circle></svg>
                </span>
                <span wire:loading.class="hidden">
                    Load More
                </span>
            </x-button.primary>
        </div>
    @endif
</div>
