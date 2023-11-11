<section class="main">
    <div class="container auth-reg-container" style="width:100%">
        <form class="auth-form-body main-body" action="{{ $action }}" method="{{ $method }}">
            <h2>{{ $title }}</h2>
            {{ $slot }}
        </form>
    </div>
</section>
