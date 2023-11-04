@extends('layout.master')

@section('title' , 'Home')

@section('content')
    <h3>I am <em>About</em> page.</h3>
    @if(count($persons) > 0)
        <ol>
            @foreach($persons as $person)
                <li>{{$person}}</li>
            @endforeach
        </ol>
    @endif

@endsection