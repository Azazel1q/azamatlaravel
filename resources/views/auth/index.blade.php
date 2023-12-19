
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
