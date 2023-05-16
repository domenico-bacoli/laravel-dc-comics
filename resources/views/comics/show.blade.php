@extends('layouts/main')

@section('content')
    <main class="show-main">
        <div class="main-image">

        </div>
        <div class="blue-band"></div>
        <div class="container">
            <div class="absolute-cover">
                <img src="{{$comic->thumb}}" alt="comic cover">
            </div>
            <section>
                <div class="comic-details">
                    <div class="title">
                        <h1>{{$comic->title}}</h1>
                    </div>
                    <div class="price-availability">
                        <div class="price">
                            U.S. Price: <strong>{{$comic->price}}</strong>
                        </div>
                        <div class="availability">
                            AVAILABLE
                        </div>
                        <div class="check-availability">
                            <strong>Check Availability</strong>
                        </div>
                    </div>
                    <div class="description">
                        {{$comic->description}}
                    </div>
                </div>
                <div class="advertisement">
                    <div class="img-description">ADVERTISEMENT</div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg')}}" alt="adv image">
                </div>
            </section>

        </div>


        
       
       

    </main>
@endsection