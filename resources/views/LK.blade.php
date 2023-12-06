@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="container">
        @if ($lk)
        <div class="worker-lk">
            <img src="{{ $user->img }}" alt="" class="worker-lk__img">
            <div class="worker-lk-text">
                <h1 class="worker-lk-text__name">{{ $user->name }}</h1>
                <p class="worker-lk-text__desc">{{ $user->email }}</p>
                <p class="worker-lk-text__desc">{{ $user->desc }}</p>
                <p class="worker-lk-text__desc">{{ $category_user }}</p>
                <p class="worker-lk-text__desc">{{ $category_id }}</p>
            </div>
        </div>
        @endif
    </div>
@endsection
