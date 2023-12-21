@extends('layouts.app')
@section('title', 'Исполнитель')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if($worker)
                <div class="workers-page">
                    <img class="worker__img" src="{{ $worker->thumb }}" alt="">
                    <div>
                        <h2 class="workers-page__text name">Имя: {{ $worker->name }}</h2>
                        <p class="workers-page__text description">Почта: {{ $worker->email }}</p>
                        <p class="workers-page__text description">О себе: {{ $worker->description }}</p>
                    </div>
                </div>
            @endif
            <h2 style="margin-bottom: 20px">Объявления исполнителя: {{ $worker->name }}</h2>
            <div>
                @if ($orders)
                    @foreach ($orders as $order)
                        <div class="worker-item">
                            <div class="worker-item__text">
                                <h3 class="name">Имя: {{ $order->title }}</h3>
                                <p class="description">Описание: {{ $order->description }}</p>
                                <p class="description">Стоимость: {{ $order->price }} руб.</p>
                                <p class="description">Сроки: {{ $order->date }} дней.</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h2>Объявлений нет</h2>
                @endif
            </div>
        </div>
    </section>
@endsection
