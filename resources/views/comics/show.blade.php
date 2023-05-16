@extends('layouts/main')

@section('content')
    <main>
        <img src="{{$comic->thumb}}" alt="comic cover">
        <hr>
        <h1>{{$comic->title}}</h1>
        
    </main>
@endsection