@extends('layouts.frontend')

@section('styles')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!---body-->
    <style>
        html, body {
            background-color: #D6EAF8;
            color: #21618c;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .position-ref {
            position: relative;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }


        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="landing-content" style="height: 90vh; margin-top: 100px;">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
              <p>  Welcome to Our job portal.</p>
            </div>

            <div class="links">
                <a href="#">Please login or register to continue.</a>
            </div>
        </div>
    </div>
@endsection
