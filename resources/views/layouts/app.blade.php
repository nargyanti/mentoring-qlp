<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mentoring QLP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <style>
        @media screen and (max-width: 768px) {
            #nav-setting {
                display: none;
            }

            .nav-item-dekstop {
                display: none;                
            }
        }

        @media screen and (min-width: 768px) {
            .nav-item-mobile {
                display: none;
            }            
        }

        footer {            
            bottom:0;
            width:100%;
            height:73px;
            background:#2A5F72;
            text-align: center;
            color: white;
            padding-top: 10px;    
            font-weight: 500;                                      
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="QLP Logo" style="width:40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->                                             
                    <ul class="navbar-nav mr-auto">                                                                     
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>                                
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mentors') }}">Mentors</a>
                        </li>                        
                    @auth
                        <li class="nav-item nav-item-dekstop">
                            <a class="nav-link" href="{{ route('setting.profile') }}">Pengaturan</a>
                        </li>    
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link" href="{{ route('setting.profile') }}">Edit Profil</a>
                        </li>    
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link" href="{{ route('setting.account') }}">Edit Akun</a>
                        </li>                                                                    
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-primary text-light" style="width:80px">Log In</button></a>
                            </li>                                                      
                        @else
                            <li class="nav-item dropdown">                                
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <button class="btn btn-primary text-light" style="width:80px">Log Out</button>
                                </a>                                    

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>        
        <footer>
            <p>QUARTER LIFE PROJECTS TEAM<br>Copyright © 2021 Quarter Life Projects</p>
        </footer>
    </div>    
</body>
</html>
