@extends('layouts.app')
@section('title', 'Объявление')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if ($order)
                <img src="{{ $order->file }}" alt="">
                <h2>Название: {{ $order->title }}</h2>
                <p>Описание: {{ $order->description }}</p>
                <p>Плата: {{ $order->price }} руб</p>
                <p>Сроки: {{ $order->date }}дней</p>
                <p>Заказчик:{{ $user[0]->name }}</p>
                @if($userAuth->category_user != 3 && Auth::user()->id != $order->client_id)
                    <form action="{{ route('orders.createOrderUser', ['order' => $order->id ]) }}" method="POST">
                        @csrf
                        <input name="status_id" style="display: none" type="text" value="1">
                        <input name="worker_id" style="display: none" type="text" value="{{ Auth::user()->id }}">
                        <input name="order_id" style="display: none" type="text" value="{{ $order->id }}">
                        <input style="margin-bottom:20px" class="button" type="submit" value="Подать кандидатуру">
                    </form>
                @endif
            @endif
        </div>
    </section>
@endsection
