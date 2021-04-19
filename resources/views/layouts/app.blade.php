@extends('layouts.base')

@section('body')
    @include('layouts.partials.navigation')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
