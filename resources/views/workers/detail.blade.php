@extends('layouts.app')
@section('title', 'Исполнитель')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if($worker)
                <div class="workers-page">
                    <img class="worker__img" src="{{ $worker->thumb }}" alt="">
                    <div>
                        <h2 class="workers-page__text name">{{ $worker->name }}</h2>
                        <p class="workers-page__text description">{{ $worker->email }}</p>
                        <p class="workers-page__text description">{{ $worker->description }}</p>
                        <a class="workers-page__text button" href="">Оставить заявку</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="main">
        <div class="container container-workers-detail">
            <div class="column products">
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <x-product-item name="{{ $product->title }}" desc="{{ $product->user_id->name }}" price="{{ $product->price }}" thumb="{{$product->thumb}}" link="/{{ route('productsDetail', ['product'=>$product->id]) }}" link="products/{{$product->id}}" ></x-product-item>
                    @endforeach
                @else
                    <h2>Продуктов нет</h2>
                @endif
            </div>
            <div class="column orders">
                @if (count($orders) > 0)
                    @foreach ($orders as $order)
                        <x-product-item name="{{ $order->title }}" desc="{{ $order->description }}" price="{{ $order->price }}" thumb="" link="/{{ route('productsDetail', ['product'=>$product->id]) }}" link="products/{{$product->id}}" ></x-product-item>
                    @endforeach
                @else
                    <h2>Объявлений нет</h2>
                @endif
            </div>
        </div>
    </section>
@endsection
