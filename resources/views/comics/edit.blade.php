@extends('layouts/main')

@section('content')
    
    <main class="home-container">
        <form class="w-50" action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" type="text" id="description" name="description">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3 ">
                <label for="thumb">Url Immagine</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3 ">
                <label for="price">Prezzo</label>
                <input class="form-control" type="text" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control" type="text" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="sale_date">Data di vendita</label>
                <input class="form-control" type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
    
            <button type="submit">Salva</button>
        </form>

    </main>
@endsection