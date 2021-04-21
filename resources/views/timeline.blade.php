@extends('layouts.app')

@section('title')Your Timeline @endsection

@section('content')
    <div class="container">
        <div class="flex">
            <div class="w-full md:w-1/2">
                <livewire:status.create>
                <livewire:status.index>
            </div>
        </div>
    </div>
@endsection
