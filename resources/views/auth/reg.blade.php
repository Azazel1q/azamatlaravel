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
    <x-header></x-header>
    @extends('layouts.auth')

    @section('title', 'Регистрация')

    <x-forms.auth-form
    title="Регистрация"
    action="{{ route('signUpForm') }}"
    method="POST"
    >
        @csrf
        <x-forms.text-input type="text" placeholder="Имя"></x-forms.text-input>
        <x-forms.text-input type="text" placeholder="Фамилия"></x-forms.text-input>
        <x-forms.text-input type="email" placeholder="Email"></x-forms.text-input>
        <x-forms.text-input type="password" placeholder="Пароль"></x-forms.text-input>
        <x-forms.primary-button>Регистрация</x-forms.primary-button>
    </x-forms.auth-form>
</body>
</html>
