<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header d-flex flex-row align-items-center justify-content-start">
                    <div class="logo"><a href="{{ route('index') }}">ULM FORUM</a></div>
                    <nav class="main_nav">
                        <ul>
                            <li id="home"><a href="{{ route('index')}}">Home</a></li>
                            <li id="kategori"><a href="{{ route('kategori') }}">Kategori</a></li>
                            <li id="radio"><a href="{{ route('radio') }}">Radio</a></li>
                            <li id="about"><a href="{{ route('about') }}">About</a></li>
                        </ul>
                    </nav>
                    <div class="search_container ml-auto">
                        <div class="weather">
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                            @else
                            <a href="{{ url('/profil/'.Auth::user()->id) }}" class="btn btn-success">{{ Auth::user()->username }}</a>
                            <a href="{{ route('logout') }}" class="btn btn-danger"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endif
                        </div>
                        
                        
                    </div>
                    <div class="hamburger ml-auto menu_mm">
                        <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="logo menu_mm"><a href="{{ route('index') }}">ULM Forum</a></div>
    <div class="search">
        <form action="#">
            <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
            <img class="header_search_icon menu_mm" src="{{ asset('res/images/search_2.png') }}" alt="">
        </form>
    </div>
    <nav class="menu_nav">
        <ul class="menu_mm">
            <li id="home"><a href="{{ route('index')}}">Home</a></li>
            <li id="kategori"><a href="{{ route('kategori') }}">Kategori</a></li>
            <li id="radio"><a href="{{ route('radio') }}">Radio</a></li>
            <li id="about"><a href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>
</div>