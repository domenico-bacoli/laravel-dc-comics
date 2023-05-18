@extends('layouts/main')

@section('content')
    
    <main class="home-container">
        <form class="w-50" action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description">{{old('description') ?? $comic->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="thumb">Url Immagine</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="price">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
                @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date">Data di vendita</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror 
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
    
            <button type="submit">Salva</button>
        </form>

    </main>
@endsection