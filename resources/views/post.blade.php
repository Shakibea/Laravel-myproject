@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h1>Welcome to our Post page!</h1>
    <p>Search which post do you need</p>
    <span>{{ $id }} {{ $name }} {{ $password }}</span>

@endsection