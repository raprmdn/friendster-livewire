<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="p-6 border-b border-gray-200">
        <div>
            <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left">
                <div class="flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                    <img class="w-24 h-24 object-cover object-center rounded-full" src="{{ $user->gravatar() }}">
                </div>
                <div>
                    <h1 class="font-semibold text-xl text-gray-900 mb-2">{{ $user->name }}</h1>
                    <div class="text-gray-600 mb-5">
                        <div class="leading-relaxed mb-4">
                            {{ $bio }}
                            @if(strlen($bio) >= 150)
                                <button wire:click="readMore" class="{{ $readmore ? 'block' : 'hidden' }} hover:underline focus:outline-none text-sm text-gray-600 block">
                                    Read more
                                </button>
                                <button wire:click="less" class="{{ !$readmore ? 'block' : 'hidden' }} hover:underline focus:outline-none text-sm text-gray-600 block">
                                    Show less
                                </button>
                            @endif
                        </div>
                        <div>
                            Joined Since : {{ $user->created_at->format("d F, Y") }}
                        </div>
                    </div>
                    <livewire:follow.button :user="$user"/>
                </div>
            </div>
        </div>
        <div class="flex justify-between w-full p-4">
            <livewire:follow.statistic :user="$user"/>
        </div>
    </div>


    <div class="p-4">
        @foreach ($statuses as $status)
            <div class="mb-10">
                <livewire:status.block :status="$status" :key="$status->id" />
            </div>
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

</div>