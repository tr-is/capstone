<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Right Job | No. 1 Job Site</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Owl carousel -->
<link href="{{ asset('public/bundles/css/owl.carousel.css') }}" rel="stylesheet">

<!-- Bootstrap -->
<link href="{{ asset('public/bundles/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Font Awesome -->
<link href="{{ asset('/bundles/css/font-awesome.css')}}" rel="stylesheet">
<!-- Custom Style -->
<link href="{{ asset('/bundles/css/main.css')}}" rel="stylesheet">

    <style>
        .popup-content{
            background: #ffffff;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 50px;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <img src="{{ asset('bundles/images/logo.png') }}" alt="">
                        </div>
                    </a>
                    <button class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            @guest
                              <!-- home page top nav bar -->
                                <li class="dropdown"><a href="{{ url('/') }}">Home</a></li>
                                  <li class="aboutus"><a href="{{ url('/about') }}">About</a></li>
                                <li class="postjob">
                                    <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                </li>
                                <li class="jobseeker">
                                    <a href="#"  data-toggle="modal" data-target="#registerModal">
                                        Register
                                    </a>
                                </li>
                                  <!-- directs to the pages-->
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Job Seeker Login') }}</a>--}}
                                {{--</li>--}}

                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>--}}
                                            {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Job Seeker Register') }}</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('admin.login') }}">{{ __('Employer Login') }}</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('admin.register.form') }}">{{ __('Employer Register') }}</a>--}}
                                {{--</li>--}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('job.user.applied') }}">{{ __('applied job') }}</a>
                                        <a class="dropdown-item" href="{{ route('user.profile.update') }}">{{ __('Profile') }}</a>
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
                <div class="clearfix"></div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    @include('partials.frontend.modals')
</body>
<footer>
    <div class="copyright">
        <div class="container">
            <div class="bttxt">Copyright © 2018 . All Rights Reserved. </div>
        </div>
</div>
</footer>
</html>
