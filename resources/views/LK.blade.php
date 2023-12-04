@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="container">
        @if ($lk)
        <p>{{ $lk->price }}</p>
        @endif
    </div>
@endsection
