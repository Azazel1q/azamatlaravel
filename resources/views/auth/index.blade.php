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

    @section('title', 'Вход в аккаунт')

    <x-forms.auth-form
    title="Вход в аккаунт"
    action="{{ route('signIn') }}"
    method="POST"
    >
        @csrf
        <x-forms.text-input type="email" placeholder="Email"></x-forms.text-input>
        <x-forms.text-input type="password" placeholder="Password"></x-forms.text-input>
        <x-forms.primary-button>Войти</x-forms.primary-button>
    </x-forms.auth-form>
</body>
</html>
