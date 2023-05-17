@extends('layouts/main')

@section('content')
    
    <main class="home-container">
        <form class="w-50" action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" type="text" id="description" name="description"></textarea>
            </div>
            <div class="mb-3 ">
                <label for="thumb">Url Immagine</label>
                <input class="form-control" type="text" id="thumb" name="thumb">
            </div>
            <div class="mb-3 ">
                <label for="price">Prezzo</label>
                <input class="form-control" type="text" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control" type="text" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date">Data di vendita</label>
                <input class="form-control" type="text" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control" type="text" id="type" name="type">
            </div>
    
            <button type="submit">Aggiungi</button>
        </form>

    </main>
@endsection