    @extends('layouts.app')

    @section('title', 'Регистрация')

    @section('content')
    <x-forms.auth-form
    title="Авторизация"
    action="1"
    method="POST"
    >
        @csrf
        {{-- <x-forms.text-input type="text" placeholder="Имя"></x-forms.text-input>
        <x-forms.text-input type="text" placeholder="Фамилия"></x-forms.text-input> --}}
        <x-forms.text-input type="email" placeholder="Email"></x-forms.text-input>
        <x-forms.text-input type="password" placeholder="Пароль"></x-forms.text-input>
        <x-forms.text-input type="submit" value="Авторизация"></x-forms.text-input>
    </x-forms.auth-form>
    @endsection
