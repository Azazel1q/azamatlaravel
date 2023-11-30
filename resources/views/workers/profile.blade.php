@extends('layouts.app')
@section('title', '{{ $worker->name }}')
@section('content')
@if($worker)
    <img src="{{ $worker->thumb }}" alt="">
    <h2>{{ $worker->name }}</h2>
    <p>{{ $worker->description }}</p>
    <p>{{ $worker->email }}</p>
@endif
@endsection
