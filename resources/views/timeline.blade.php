@extends('layouts.app')

@section('title')Your Timeline @endsection

@section('content')
    <div class="p-6">
        <livewire:status.create>
        <livewire:status.index>
    </div>
@endsection
