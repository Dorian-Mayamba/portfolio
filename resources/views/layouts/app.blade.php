<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    @yield('extra-css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-green shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects') }}" class="nav-link">Projects</a>
                        </li>
                        {{--<li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">About me</a>
                        </li>--}}
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link">Contact me</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('create-project') }}" class="text-secondary">Add project</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('create-category') }}" class="dropdown-item">Add category</a>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Session::has('danger'))
                <div class="alert alert-danger">
                    <h2 class="text-center"><small>{{ Session::get('danger') }}</small></h2>
                </div>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <h2 class="text-center"><small>{{ Session::get('success') }}</small></h2>
                </div>
            @endif

            @yield('content')
        </main>
        @yield('footer-content')
        <div class="footer bg-primary p-2" id="release-footer">
            <h3 class="text-center text-light"><small>Released by <a class="text-light" href="#">Dorian Mayamba</a></small></h3>
        </div>
    </div>
    <script type="text/javascript">
        setTimeout(() => {
            $('.alert').fadeOut("slow");
        }, 3000);
    </script>
</body>
</html>
