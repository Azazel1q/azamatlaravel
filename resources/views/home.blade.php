@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <main class="main-header">
        <div class="layers">
            <ul class="layers_base">
                @foreach ($categories as $key => $category)
                    @if ($key < 7)
                        <li><a class="link-dark" href="categories/{{ $category->slug }}">{{ $category->title }}</a></li>
                    @else
                        @break
                    @endif
                @endforeach
            </ul>
            <div class="layer layers_middle">
                <h1>Миллионы исполнители готовы вам помочь</h1>
                <a class="button" href="">Оставить заказ</a>
            </div>
            <div class="layer layers_front" style="background-image:url(/img/front.png)"></div>
        </div>
    </main>
    <section class="main">
        <div class="container">
            <div class="best-workers">
                <h2>Лучшие фрилансеры</h2>
                <div class="workers">
                    @foreach ($workers as $worker)
                        <article class="worker-sm">
                            <div class="worker-sm__img" >
                                <img src="{{ $worker->thumb }}" alt="">
                            </div>
                            <h3 class="worker-sm__title">{{ $worker->name }}</h3>
                            <p class="worker-sm__desc">{{ $worker->desc }}</p>
                            <a class="link" href="workers/{{ $worker->id }}">Профиль</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="main-header form-order-bg">
        <div class="container">
            <div class="form-order">
                <h2 class="form-order__title">Закажите услуги прямо сечас</h2>
                <a class="button" href="">Начать</a>
            </div>
        </div>
    </section>
@endsection
