<header>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="{{route('homepage')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo comics dc"></a>
                    
            </div>  
            <ul>
                <li><a href="#">characters</a></li>
                <li><a href="{{route('comics.index')}}">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>   
            </ul>
            <div class="search">
                <input type="text" class="search-input" placeholder="Search">
                <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
        </div>
    </nav>
</header>