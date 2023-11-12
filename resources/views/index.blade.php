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
            <ul class="layers_base">
                <li><a class="link-dark" href="">Дизайн</a></li>
                <li><a class="link-dark" href="">Разработка и IT</a></li>
                <li><a class="link-dark" href="">Тексты и переводы</a></li>
                <li><a class="link-dark" href="">SEO и Трафик</a></li>
                <li><a class="link-dark" href="">Соцсети и реклама</a></li>
                <li><a class="link-dark" href="">Аудио, видео, съемка</a></li>
                <li><a class="link-dark" href="">Бзнес и жизнь</a></li>
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
                    <article class="worker-sm">
                        <div class="worker-sm__img" >
                            <img src="img/front.png" alt="">
                        </div>
                        <h3 class="worker-sm__title">Пилапуп Пилапупович</h3>
                        <p class="worker-sm__desc">Фрилансер Full-stack Разработчик с 10 летним опытом</p>
                    </article>
                    <article class="worker-sm">
                        <div class="worker-sm__img" >
                            <img src="img/front.png" alt="">
                        </div>
                        <h3 class="worker-sm__title">Пилапуп Пилапупович</h3>
                        <p class="worker-sm__desc">Фрилансер Full-stack Разработчик с 10 летним опытом</p>
                    </article>
                    <article class="worker-sm">
                        <div class="worker-sm__img" >
                            <img src="img/front.png" alt="">
                        </div>
                        <h3 class="worker-sm__title">Пилапуп Пилапупович</h3>
                        <p class="worker-sm__desc">Фрилансер Full-stack Разработчик с 10 летним опытом</p>
                    </article>
                    <article class="worker-sm">
                        <div class="worker-sm__img" >
                            <img src="img/front.png" alt="">
                        </div>
                        <h3 class="worker-sm__title">Пилапуп Пилапупович</h3>
                        <p class="worker-sm__desc">Фрилансер Full-stack Разработчик с 10 летним опытом</p>
                    </article>
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
</body>
</html>
