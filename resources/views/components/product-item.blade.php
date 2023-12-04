<div class="product-item worker-item">
    <img class="product-item__img worker__img" src="{{ $thumb }}" alt="">
    <div class="product-item__text worker-item__text">
        <h3 class="name">{{ $name }}</h3>
        <p class="description">{{ $desc }}</p>
    </div>
    <div class="worker-item__buttons">
        <a class="button" href="/{{ $order }}">Заказать</a>
        <a class="button" href="/{{ $link }}">Подробнее</a>
    </div>
</div>
