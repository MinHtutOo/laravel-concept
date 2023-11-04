@extends('layout.master')

@section('title' , 'Home')

@section('content')

    <div class="container">
        <div class="d-grid gap-2 d-md-block">
            <h3>Name is <em>{{$name}}</em> and country is <b><em>{{$country}}</em></b></h3>
            <button class="btn btn-success">Confirm</button>
        </div>
    </div>

@endsection