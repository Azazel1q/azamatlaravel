@extends('layouts.app')
@section('title', 'Продукты')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            <h2 class="workers__title">Продукты</h2>
            <div class="items products">
                @foreach ($products as $product)
                    <x-product-item name="{{ $product->title }}" desc="{{ $product->user_id->name }}" price="{{ $product->price }}" thumb="{{$product->thumb}}" link="/{{ route('productsDetail', ['product'=>$product->id]) }}" link="products/{{$product->id}}" ></x-product-item>
                @endforeach
            </div>
        </div>
    </section>
@endsection
