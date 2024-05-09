<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    	<!-- Favicon-->
	<link rel="icon" href="{{ asset('raja/images/favicon.ico')}}" type="image/x-icon">

    <!-- Plugins Core Css -->
    <link href="{{ asset('raja/css/app.min.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('raja/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('raja/css/pages/extra_pages.css')}}" rel="stylesheet" />

    <!-- Plugins Js -->

	<script src="{{ asset('raja/js/app.min.js')}}"></script>

    <!-- Extra page Js -->
    <script src="{{ asset('raja/js/pages/examples/pages.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('raja/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- <div id="app">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> --> 

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <!-- @guest
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
                            </li>
                        @endguest -->
                    <!-- </ul> --> 
                <!-- </div>
            </div> -->

        <!-- <main class="py-4"> -->
            @yield('content')
        <!-- </main>
    </div> -->
</body>
</html>
