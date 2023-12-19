@extends('layouts.app')
@section('title', 'Объявление')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if ($order)
                <img src="{{ $order->file }}" alt="">
                <h2>{{ $order->title }}</h2>
                <p>{{ $order->description }}</p>
                <p>{{ $order->price }}</p>
                <p>{{ $order->date }}дней</p>
                <p>Заказчик:{{ $user[0]->name }}</p>
                @if(Auth::user()->category_user != 3)
                <form action="{{ route('orders.statusUpdate', ['order' => $order->id ]) }}" method="POST">
                    @csrf
                    <input name="status_id" style="display: none" type="text" value="2">
                    <input style="margin-bottom:20px" class="button" type="submit" value="Подать кандидатуру">
                </form>
                @endif
            @endif
        </div>
    </section>
@endsection
