@extends('layouts/main')

@section('content')
    
    <main class="home-container">

        <form class="w-50" action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Titolo</label>
                                                                                    {{-- con il metodo old() facciamo in modo che il dato rimanga anche se l'utente ha inviato il form senza compilare tutti i campi --}}
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="thumb">Url Immagine</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="price">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price')}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror    
            </div>
            <div class="mb-3">
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
                @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror    
            </div>
            <div class="mb-3">
                <label for="sale_date">Data di vendita</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror   
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror    
            </div>
    
            <button type="submit">Aggiungi</button>
        </form>

    </main>
@endsection