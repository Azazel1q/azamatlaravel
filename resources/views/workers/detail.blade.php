@extends('layouts.app')
@section('title', 'Исполнитель')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if($worker)
                <img src="{{ $worker->thumb }}" alt="">
                <h2>{{ $worker->name }}</h2>
                <p>{{ $worker->email }}</p>
                <p>{{ $worker->description }}</p>
                <a class="button" href="">Заказть</a>
                <a class="button" href="">Написать исполнителю</a>
            @endif
        </div>
    </section>
@endsection
