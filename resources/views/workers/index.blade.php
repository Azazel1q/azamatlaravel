@extends('layouts.app')
@section('title', 'Исполнители')
@section('content')
    <x-header></x-header>
    <section class="main">
        <div class="container container-workers" style="width:100%">
            <h2 class="workers__title">Фрилансеры</h2>
            <div class="items">
                @foreach ($Users as $user)
                    <x-item name="{{ $user->name }}" desc="{{ $user->description }}" thumb="{{$user->thumb}}" link="workers/{{ $user->id }}"></x-item>
                @endforeach
            </div>
        </div>
    </section>
@endsection
