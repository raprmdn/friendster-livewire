<div class="bg-white0 lg:h-screen w-full lg:w-1/5 lg:fixed lg:border-r border-gray-200">
    {{-- In work, do what you enjoy. --}}
    <div class="py-2 leading-loose">
        <div class="bg-gray-50 border-b border-gray-200 px-6 py-5">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="w-14 h-14 rounded-full object-cover object-center" src="{{ auth()->user()->gravatar() }}">
                </div>
                <div>
                    <h1>{{ auth()->user()->name }}</h1>
                    <small class="text-sm text-gray-600">
                        Joined {{ auth()->user()->created_at->format("d F Y") }}
                    </small>
                </div>
            </div>
            <div class="leading-relaxed text-sm text-gray-600 mt-4">
                {{ auth()->user()->description }}
            </div>
        </div>
        @auth
            <a href="/timeline" class="block py-1 px-6 hover:bg-gray-100">Timeline</a>
        @endauth
        <a href="{{ route('settings') }}" class="block py-1 px-6 hover:bg-gray-100">Settings</a>
        <a href="{{ route('account.show', auth()->user()->usernameOrHash) }}" class="block py-1 px-6 hover:bg-gray-100">Your Profile</a>
        <a href="" class="block py-1 px-6 hover:bg-gray-100">Your Friends</a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="block py-1 px-6 hover:bg-gray-100">
            Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>
