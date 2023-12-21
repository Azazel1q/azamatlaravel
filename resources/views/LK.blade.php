@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="container">
            <div class="worker-lk">
                <img src="{{ $user->img }}" alt="" class="worker-lk__img">
                <div class="worker-lk-text">
                    <p class="worker-lk-text__desc">Имя:</p>
                    <h1 class="worker-lk-text__name">{{ $user->name }}</h1>
                    <p class="worker-lk-text__desc">Почта: {{ $user->email }}</p>
                    <p class="worker-lk-text__desc">О себе: {{ $user->desc }}</p>

                </div>
            </div>
            <div class="container-columns">
                @if ($user->category_user != 3)
                    <div class="column">
                        <h2>Мои заказы</h2>
                        @if ($myOrderUsers == null)
                            @foreach ($myOrderUsers as $myOrderUser)
                                <div class="worker-item">
                                    <div class="worker-lk-text">
                                        <h2 class="worker-lk-text__name">Название: {{ $myOrderUser->title }}</h2>
                                        <p class="worker-lk-text__desc">Описание: {{ $myOrderUser->description }}</p>
                                        <p class="worker-lk-text__desc">Стоимость: {{ $myOrderUser->price }} руб.</p>
                                        <p class="worker-lk-text__desc">Сроки: {{ $myOrderUser->date }} дней.</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Заказов пока нет</p>
                        @endif
                    </div>
                @endif
                <div class="column">
                    <h2>Мои обьявления</h2>
                        @foreach ($orders as $order)
                            <div class="product-item worker-item">
                                <div class="card-body">
                                    <h3 class="card-title"><strong>Название: </strong>{{ $order->title }}</h3>
                                    <p class="card-text"><strong>Описание: </strong>{{ $order->description }}</p>
                                    <p class="card-text"><strong>Стоимость: </strong>{{ $order->price }} руб.</p>
                                    <p class="card-text"><strong>Сроки: </strong>{{ $order->date }} дней.</p>
                                </div>
                                <form action="{{ route('orders.deleteOrder', ['id'=>$order->id]) }}" method="POST">
                                    @csrf
                                    <input class="link" type="submit" value="Удалить объявление">
                                </form>
                            </div>
                        @endforeach
                </div>
            </div>
    </div>
@endsection
