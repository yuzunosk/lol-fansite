<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/master.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/webfonts') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app2">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        <!-- フラッシュメッセージ -->
        @if (session('flash_message'))　<!-- sessionに'flash_message'が入った時に表示する -->
            <div class="alert alert-primary text-center" role="alert">
                {{ session('flash_message') }}
            </div>
        @endif


        <main class="p-4">
            <div class="container-fluied">
                <div class="row">
                    @yield('content')
                    @section('sidebar')
                    <div class="col-2">
                        <div class="container-fluied text-center">
                            <div class="row justify-content-end">
                                <div class="col list-group list-group-flush">
                                    <p class="list-group-item list-group-item-dark">my menu</p>
<!-- menu profile-->
                                    <div class="btn-group dropleft list-group-item p-0">
                                        <button 
                                        type="button" class="btn btn-white dropdown-toggle p-3" 
                                        data-toggle="dropdown" aria-haspopup="true" 
                                        aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                        profile
                                        </button>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item">E-mail</a>
                                                <a href="#" class="dropdown-item">Password</a>
                                            </div>
                                    </div>
<!-- menu profile end-->

<!-- chanpion -->
                                    <div class="btn-group dropleft list-group-item p-0">
                                        <button 
                                        type="button" class="btn btn-white dropdown-toggle p-3" 
                                        data-toggle="dropdown" aria-haspopup="true" 
                                        aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                        Chanpions
                                        </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('chanpions.new') }}" class="dropdown-item">New Chanpion Registration</a>
                                                <a href="{{ route('chanpions.create') }}" class="dropdown-item">Registration Chanpions List</a>
                                            </div>
                                    </div>
<!-- chanpion End -->
<div class="btn-group dropleft list-group-item p-0">
                                        <button 
                                        type="button" class="btn btn-white dropdown-toggle p-3" 
                                        data-toggle="dropdown" aria-haspopup="true" 
                                        aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                        Chanpion Skills
                                        </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('skills.new') }}" class="dropdown-item">New Skill Registration</a>
                                            </div>
                                    </div>


<!-- Roll -->
                                    <div class="btn-group dropleft list-group-item p-0">
                                        <button 
                                        type="button" class="btn btn-white dropdown-toggle p-3" 
                                        data-toggle="dropdown" aria-haspopup="true" 
                                        aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                        Chanpion Rolls
                                        </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('rolls.new') }}" class="dropdown-item">New Roll Registration</a>
                                                <a href="{{ route('rolls.create') }}" class="dropdown-item">Registration Rolls List</a>
                                            </div>
                                    </div>
<!-- Roll END -->

<!-- Tag -->
                                    <div class="btn-group dropleft list-group-item p-0">
                                        <button 
                                        type="button" class="btn btn-white dropdown-toggle p-3" 
                                        data-toggle="dropdown" aria-haspopup="true" 
                                        aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                        Chanpion Tags
                                        </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('tags.new') }}" class="dropdown-item">New Tag Registration</a>
                                                <a href="{{ route('tags.create') }}" class="dropdown-item">Registration Tags List</a>
                                            </div>
<!-- Tag END -->

<!-- content -->
                                            <div class="btn-group dropleft list-group-item p-0">
                                                <button 
                                                type="button" class="btn btn-white dropdown-toggle p-3" 
                                                data-toggle="dropdown" aria-haspopup="true" 
                                                aria-expanded="false" style="width: 100%;box-sizing: border-box">
                                                Contents
                                                </button>
                                            <div class="dropdown-menu">
                                                <a href="{{ route('articles.new') }}" class="dropdown-item">New Articles Registration</a>
                                                <a href="{{ route('categorys.new') }}" class="dropdown-item">New Category Registration</a>
                                                <a href="{{ route('articles.create') }}" class="dropdown-item">Registration Articles List</a>
                                            </div>
<!-- content end-->
                                </div>
                            </div>
                        </div>
                    </div>
                <div> <!-- col2 -->
                    @show
            <div> <!-- row -->
            </div> <!-- container -->
        </main>
    </div>
</body>
</html>
