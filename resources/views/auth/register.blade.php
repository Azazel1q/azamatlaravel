@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
<div class="main-full">
    <div class="container auth-reg-container">
        <div class="card-body">
            <form class="auth-form-body" method="POST" action="{{ route('register') }}">
                <h2 class="card-header">{{ __('Register') }}</h2>
                @csrf
                <input placeholder="Имя" id="name" type="text" class="input_field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input placeholder="email" id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input placeholder="Пароль" id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input placeholder="Павтор пароля" id="password-confirm" type="password" class="input_field" name="password_confirmation" required autocomplete="new-password">
                <label for="category_user" class="col-md-4 col-form-label text-md-end">Кем являетесь?</label>
                <select class="input_field" name="category_user" id="category_user">
                    <option class="input-field__option" value="2">Исполнитель</option>
                    <option class="input-field__option" value="3">Клиент</option>
                </select>
                <button type="submit" class="button">
                    {{ __('Register') }}
                </button>
                <a class="link" href="{{ route('login') }}">Есть аккаунт?</a>
            </form>
        </div>
    </div>
</div>
@endsection
