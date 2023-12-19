@extends('layouts.app')
@section('title', 'Добавить объявление')
@section('content')
    <div class="main-full main">
        <div class="container auth-reg-container">
            <div class="card-body">
                <form class="auth-form-body" method="POST" action="{{ route('orders.create') }}" enctype="multipart/form-data">
                    <h2 class="card-header">Добавить объявление</h2>
                    @csrf
                    <input style="display:none" name="client_id" id="client_id" value="{{ Auth::user()->id }}">
                    <input placeholder="Название" name="title" id="title" type="text" class="input_field" required>
                    <textarea placeholder="Описание" name="description" id="description" type="text" class="input_field"></textarea>
                    <input placeholder="Файл" name="files" id="file" type="file" class="input_field">
                    <select class="input_field" name="category" id="categories">
                        @foreach ($categories as $category)
                            <option class="input-field__option" value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <input placeholder="Стоимость" name="price" id="price" type="text" class="input_field">
                    <input placeholder="Сроки" name="date" id="date" type="datetime" class="input_field">
                    <button type="submit" class="button">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
