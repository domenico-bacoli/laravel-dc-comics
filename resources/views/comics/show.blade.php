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
            <div class="button-edit">
                <a href="{{route('comics.edit', $comic->id)}}" class="me-3"><button>Modifica</button></a>
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                      </button>
                </form>

                {{-- MODAL --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Attenzione!</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Vuoi davvero eliminare definitivamente questo fumetto?
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-bs-dismiss="modal">Annulla</button>

                            {{-- Form per l'eliminazione del comic dal database --}}
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button> 
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>


        
       
       

    </main>
@endsection