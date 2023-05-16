<footer>
    <div class="footer-top">
        <div class="container top">
            <div class="footer-list">
                @foreach ($footerLists as $footerList)
                <div class="col">
                    <strong class="list-title">{{$footerList['title']}}</strong>
                    <ul>
                        @foreach ($footerList['links'] as $footerLink )
                        <li>{{$footerLink}}</li> 
                        @endforeach
                         
                    </ul>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-button">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="footer-social-link">
                <span>FOLLOW US</span>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook icon">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter icon">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube icon">
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest icon">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope icon">

            </div>
        </div>
    </div>
</footer>