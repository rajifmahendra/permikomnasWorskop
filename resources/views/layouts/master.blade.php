<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">PT Inovasi Teknologi</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <router-link to="/" class="nav-link">Home</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/profile" class="nav-link">Profile</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/contact" class="nav-link">Contact Us</router-link>
                              </li>
                          </ul>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="row">
                @yield('content')
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-footer text-muted">
                          Permikomnas Workshop Laravel VueJs 2020
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
