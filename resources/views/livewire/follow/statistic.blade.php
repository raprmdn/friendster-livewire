<div class="bg-gray-600 text-gray-300">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex justify-center">
        <div class="w-1/3 flex">
            <div class="flex-1 py-2 text-center border-r border-gray-500">
                <div>
                    Status
                </div>
                <div class="text-xl font-semibold text-white">
                    250
                </div>
            </div>
            <div class="flex-1 py-2 text-center border-r border-gray-500">
                <div>
                    Following
                </div>
                <div class="text-xl font-semibold text-white">
                    {{ $user->follows()->count() }}
                </div>
            </div>
            <div class="flex-1 py-2 text-center">
                <div>
                    Followers
                </div>
                <div class="text-xl font-semibold text-white">
                    {{ $user->followers()->count() }}
                </div>
            </div>
        </div>
    </div>
</div>
