@extends('layouts/main')

@section('content')

<main class="home-container">
    <div class="main-image mb-5"></div>
    <div class="container text-center">
        <a href="{{route('comics.index')}}"><button class="mb-5">Elenco dei Comics</button></a>
    </div>
</main>

@endsection