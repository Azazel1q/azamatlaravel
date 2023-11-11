<header>
    <div class="logo">WorkIng</div>
    <div class="dropdown_menu" id="burger_button">
        <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 19h16v-2H4v2zm16-6H4v2h16v-2zM4 9v2h16V9H4zm16-4H4v2h16V5z"/>
        </svg>
    </div>
    <div class="menu" id="menu">
        <ul class="menu__body" id="menu__body">
            <li><div class="logo">WorkIng</div></li>
            <li><a class="link" href="{{ route('home')}}">Главная</a></li>
            <li><a class="link" href="">Биржа</a></li>
            <li><a class="link" href="">Исполнители</a></li>
            <li><a class="link" href="{{ route('login')}}">Вход</a><a class="link" href="{{ route('signUp')}}">Регистрация</a></li>
        </ul>
    </div>
</header>
