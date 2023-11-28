@extends('layouts.app')
@section('title', 'Исполнители')
@section('content')
    <x-header></x-header>
    <section class="main">
        <div class="container container-workers" style="width:100%">
            <h2 class="workers__title">Фрилансеры</h2>
            <div class="items">
                <x-item
                name="Пипалапуп Пипалапупович" 
                desc="Работник компании Студия Максима Набиуллина"></x-item>
            </div>
        </div>
    </section>
@endsection
