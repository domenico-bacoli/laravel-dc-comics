@extends('layouts/main')

@section('content')
<main>
    <div class="main-image">

    </div>
    <div class="container">
        <div class="main-title-absolute">CURRENT SERIES</div>
        <div class="card-series-container">
            <div class="card-container">
                @foreach ($comics as $comic)
                <div class="card">
                    <a href="{{route('comics.show', $comic->id)}}" class="card-image">
                        <img src="{{$comic->thumb}}" alt="comic cover">  
                    </a>
                    <div class="card-title">{{$comic->title}}</div>
                </div>              
                @endforeach
            </div>
        </div>
        <div class="button-load">
            <button class="me-2">LOAD MORE</button>
            <a href="{{route('comics.create')}}"><button>AGGIUNGI</button></a>
        </div>
    </div>
    <div class="main-shop">
        <div class="container">
            <div class="shop-item">
                <img src=" {{Vite::asset('resources/img/buy-comics-digital-comics.png')}} " alt="digital comics">
                <div class="shop-item-text">digital comics</div>
            </div>
            <div class="shop-item">
                <img src=" {{Vite::asset('resources/img/buy-comics-merchandise.png')}} " alt="dc merchandise">
                <div class="shop-item-text">dc merchandise</div>
            </div>
            <div class="shop-item">
                <img src=" {{Vite::asset('resources/img/buy-comics-subscriptions.png')}} " alt="subscription">
                <div class="shop-item-text">subscription</div>
            </div>
            <div class="shop-item">
                <img src=" {{Vite::asset('resources/img/buy-comics-shop-locator.png')}} " alt="shop locator">
                <div class="shop-item-text">shop locator</div>
            </div>
            <div class="shop-item">
                <img src=" {{Vite::asset('resources/img/buy-dc-power-visa.svg')}} " alt="dc power visa">
                <div class="shop-item-text">dc power visa</div>
            </div>
            {{-- @foreach ($shopItems as $shopItem)
            <div class="shop-item"> 
                <img src="{{ Vite::asset($shopItem['img'])}}" alt="{{$shopItem['text']}}">
                <div class="shop-item-text">{{$shopItem['text']}}</div>
            </div>
            @endforeach --}}
        </div>
    </div>
</main>

@endsection