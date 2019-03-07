<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TravelAgency') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="../../image/agence_voyage.png" alt=""><span class="bleu">Travel</span><span id="nameTitle">Agency</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                         <!--link-->
                         
                        <li class="nav-item">
                            <a class="nav-link" href="/"><span class="dore">NOS OFFRES</span></a>
                        </li>
                         
                        <li class="nav-item">
                            <a class="nav-link" href="#mainContent"><span class="dore d-none">DESTINATIONS</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/honeymoon"><span class="dore">HONEYMOON</span></a>
                        </li>
                        @can('view', App\Destination::class)
                        
                            <li class="nav-item">
                                <a class="nav-link" href="/destinations"><span class="dore">LIST ADMIN</span></a>
                            </li>
                        @endcan
                            
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">                        
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>
<!--footer-->
    <footer>
        <div class="footerInfo"> 
            <div class="footerIcon">
                <a href="https://www.facebook.com/" target=_blank><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/" target=_blank><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.youtube.com/" target=_blank><i class="fab fa-youtube-square"></i></a>
                <a href="https://www.instagram.com/" target=_blank><i class="fab fa-instagram"></i></a>
                <a href="https://www.pinterest.fr/" target=_blank><i class="fab fa-pinterest-square"></i></a>
            </div>
            <div>
                <p><a href="{{ url('footerInfo/who') }}">Qui sommes-nous ?</a> | 
                <a href="{{ url('footerInfo/mentions') }}">Mentions légales</a> | 
                <a href="{{ url('footerInfo/cgv') }}">Conditions générales de ventes</a> | 
                <a href="{{ url('footerInfo/question') }}">FAQ</a></p>
            </div>
            <div>    
                <a href="{{ url('footerInfo/contact') }}">Nous contacter</a>
            </div>
        </div>
        <div class="copyright bg-dark text-center">
            <p class="text-white pt-1 pb-1">Copyright 2019 | TomTom Digital | Tous droits réservés</p>
            </ul>
        </div>
    </footer>
<!--/footer-->


    </div>
</body>
</html>
