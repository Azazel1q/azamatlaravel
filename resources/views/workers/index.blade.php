<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', env('APP_NAME'))</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
<body>
    <x-header-light></x-header-light>
    <section class="main">
        <div class="container container-workers" style="width:100%">
            <h2 class="workers__title">Фрилансеры</h2>
            <div class="items">
                <x-item></x-item>
                <x-item></x-item>
                <x-item></x-item>
                <x-item></x-item>
                <x-item></x-item>
                <x-item></x-item>
            </div>
        </div>
    </section>
</body>
</html>
