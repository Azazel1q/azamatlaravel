<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Карта сайта</h1>
    <ul>
        <li><a href="{{ route('home') }}">Главная</a></li>
        <li><a href="{{ route('orders') }}">Объявления</a>
            <ul>
                <li><a href="{{ route('orderForm') }}">Добавить объвление</a></li>
                <li><a href="/orders/6">Детальная страница объявления</a></li>
            </ul>
        </li>
        <li><a href="{{ route('workers') }}">Исполнители</a>
            <ul>
                <li><a href="/workers/2">Детальная страница объявления</a></li>
            </ul>
        </li>
        <li><a href="{{ route('LK') }}">Личный кабинет</a></li>
    </ul>
</body>
</html>
