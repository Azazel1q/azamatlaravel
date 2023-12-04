@extends('layouts.app')
@section('title', 'Продукт')
@section('content')
    <section class="main">
        <div class="container container-workers" style="width:100%">
            @if($product)
                <img src="{{ $product->thumb }}" alt="">
                <h2>{{ $product->title }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
            @endif
        </div>
    </section>
@endsection
