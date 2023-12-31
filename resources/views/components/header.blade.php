<header>
    <a class="logo" href="{{ route('home')}}">WorkIng</a>
    <div class="dropdown-menu" id="burger_button">
        <svg class="dropdown-menu__svg" fill="#ffffff" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 19h16v-2H4v2zm16-6H4v2h16v-2zM4 9v2h16V9H4zm16-4H4v2h16V5z"/>
        </svg>
    </div>
    <div class="menu" id="menu">
        <ul class="menu__body" id="menu__body">
            <li><div class="logo logo-light">WorkIng</div></li>
            <li><a class="link" href="{{ route('home')}}">Главная</a></li>
            <li><a class="link" href="{{ route('orders') }}">Объявления</a></li>
            <li><a class="link" href="{{ route('workers')}}">Исполнители</a></li>
            @guest
            <li><a class="link" href="{{ route('login')}}">Вход</a></li>
            <li><a class="link" href="{{ route('register')}}">Регистрация</a></li>
            @endguest
            @auth
            <li><a class="link" href="{{ route('LK')}}">Личный кабинет</a></li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" class="link" value="Выход">
            </form>
            @endauth
        </ul>
    </div>
</header>
