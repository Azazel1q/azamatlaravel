<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', env('APP_NAME'))</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <x-header></x-header>
    <main class="main-header">
        <div class="layers">
            <div class="layer layers_base"></div>
            <div class="layer layers_middle">
                <h1>Миллионы исполнители готовы вам помочь</h1>
                <a class="button" href=""><p class="link">Оставить заказ</p></a>
            </div>
            <div class="layer layers_front" style="background-image:url(/img/front.png)"></div>
        </div>
    </main>
    <article class="main-article" style="background-image:url(/img/dungeon.jpg)">
        <div class="info">
            <h2 class="title">Чем мы занимаемся?</h2>
            <p class="text">Сайт представлен в стиле природы, так как <br>
                наша деятельность непосредственно связано с созданием твоhческого контента. <br>
                Сайт предлагает вам создать будущее для себя либо для другим!</p>
        </div>
    </article>
</body>
</html>
