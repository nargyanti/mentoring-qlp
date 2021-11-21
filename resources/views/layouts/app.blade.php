<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mentoring QLP</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.qeditor.js') }}" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/e5d58c1a7c.js" crossorigin="anonymous"></script>    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.qeditor.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <style>
        @media screen and (max-width: 768px) {
            #nav-setting {
                display: none;
            }

            .nav-item-dekstop {
                display: none;                
            }

            .img-home {
                display: none;
            }                         
        }

        @media screen and (min-width: 768px) {
            .nav-item-mobile {
                display: none;
            }
            
            .benefit-list {
                padding-top: 2rem;
            }

            #jumbotron-heading {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 1200px) {
            #login-image {
                display: none;
            }
            
            .badge-expertise {
                display: none;
            }
            
            .mentor-detail-jumbotron-about {
                text-align: center;
                margin: 1rem 0;
            }
        }

        footer {            
            bottom:0;
            width:100%;
            height:80px;
            background:#2A5F72;
            text-align: center;
            color: white;            
            font-weight: 500;                   
        }    
        
        main {
            min-height: 100vh;
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
                            <a class="nav-link font-weight-bold" href="{{ route('home') }}">Home</a>                                
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{ route('mentors') }}">Mentors</a>
                        </li>                        
                    @auth      
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.profile') }}">Edit Profil</a>
                        </li>    
                        <li class="nav-item nav-item-mobile">
                            <a class="nav-link font-weight-bold" href="{{ route('setting.account') }}">Edit Akun</a>
                        </li>                                                                    
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest                            
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('login') }}"><button class="btn btn-primary text-light" style="width:80px">Log In</button></a>
                            </li>                                                      
                        @else
                            <li class="nav-item nav-item-mobile">                                
                                <a class="nav-link font-weight-bold" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <button class="btn btn-primary text-light" style="width:80px">Log Out</button>
                                </a>                                    

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                                
                            </li>

                            <li class="nav-item nav-item-dekstop dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if(!is_null(Auth::user()->profile_picture))
                                        <img src="{{ asset('img/uploads/'.Auth::user()->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:40px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:40px">                        
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('mentorDetail', Auth::user()->id) }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('setting.profile') }}">Pengaturan</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if (Request::is('mentors/*') || Request::is('home') || Request::is('login') || Request::is('register'))
            <main>    
        @else
            <main class="py-4">
        @endif                
            @yield('content')
        </main>        
        <footer class="py-3">
            <p><b>QUARTER LIFE PROJECTS TEAM</b><br>Copyright © 2021 Quarter Life Projects</p>
        </footer>
    </div>    
</body>
</html>
