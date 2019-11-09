@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <h1>Welcome to our Contact page!</h1>
    <p>Search what you need</p>

    @if(count($people))
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    {{ '........$$$..........' }}
        @for($i=0; $i<count($people); $i++)
            <li>{{ $people[$i] }}</li>
            @endfor
    </ul>
    @endif

@endsection