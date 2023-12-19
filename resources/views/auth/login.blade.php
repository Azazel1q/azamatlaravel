@extends('layouts.app')

@section('content')
<div class="main-full">
    <div class="container auth-reg-container">
        <form class="auth-form-body" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card-header">{{ __('Login') }}</div>
            <input placeholder="Email" id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input placeholder="Пароль" id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input_field">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="button">
                {{ __('Login') }}
            </button>
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        <a class="link" href="{{ route('register') }}">Нет аккаунта?</a>
        </form>
    </div>
</div>
@endsection
