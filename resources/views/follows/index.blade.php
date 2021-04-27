@extends('layouts.app')

@section('title')Your {{ $follow }} @endsection

@section('content')
    <div class="p-4 border-b border-gray-200 font-semibold text-lg">
        {{ ucfirst($follow) }}
    </div>
    <div class="p-6">
        <div class="flex flex-wrap">
            @foreach ($follows as $follow)
               <div class="w-full lg:w-1/2 mb-4">
                    <div class="flex item-center">
                        <img class="w-16 h-16 flex-shrink-0 mr-3 object-cover object-center rounded-full" src="{{ $follow->gravatar() }}" alt="{{ $follow->username }}">
                        <div>
                            <div>
                                {{ $follow->name }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $follow->created_at->format("d F Y") }}
                            </div>
                        </div>
                    </div>
               </div>
            @endforeach
        </div>
    </div>
@endsection
