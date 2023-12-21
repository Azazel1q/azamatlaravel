@extends('layouts.app')
@section('title', 'Объявления')
@section('content')
    <section class="main main-full">
        <div class="container container-workers" style="width:100%">
            <h2 class="workers__title">Объявления</h2>
            @auth
            <a class="link" href="{{ route('orderForm') }}">Добавить объявление</a>
            @endauth
            @if (count($orders) > 0)
            <div class="items products">
                @foreach ($orders as $order)
                    @if($order->status_id == 1)
                    <div class="product-item worker-item">
                        <div class="product-item__text worker-item__text">
                            <h3 class="name">Название: {{ $order->title }}</h3>
                            <p class="description">Стоимость: {{ $order->price }} руб</p>
                            <p class="description">Сроки: {{ $order->date }} дней</p>
                        </div>
                        <div class="worker-item__buttons">
                            <a class="button" href="/orders/{{$order->id}}">Подробнее</a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            @else
            <h3 class="workers__title">Пока объявлений нет</h3>
            @endif
        </div>
    </section>
@endsection
