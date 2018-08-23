<!DOCTYPE html>
<html>
<head>
    <!-- meta viewport -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title> Jobs | Recruitment | Post Job | Outsourcing | Human Resource</title>

    <meta name="description"
          content="Jobs - online job site where you can post job, vacancies and requirements for free."/>

    <link rel="shortcut icon" href="{{ asset('bundles/yarshafrontend/images/fav.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('bundles/yarshafrontend/images/fav.png') }}" type="image/x-icon">
    <!-- fontawesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font css path -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- glypicon font path -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- bootstrap css path -->
    <link href="{{ asset('bundles/css/bootstrap.min.css') }}" media="screen" rel="stylesheet">
    <!-- style sheet path -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bundles/css/style.css') }}">
    <!-- responsive path -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bundles/css/respond.css') }}">

    @yield('styles')

    <!--[if lt IE 9]>
    <script src="{{ asset('bundles/yarshafrontend/js/html5shiv.js') }}"></script>
    <script src="{{ asset('bundles/yarshafrontend/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>


<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your browsing experience.</p>
<![endif]-->

@include('partials.frontend.navigation_bar')

@yield('content')

@include('partials.frontend.footer')

<script type="text/javascript" src="{{ asset('bundles/js/jquery.min.js') }}"></script>
<!-- bootstrap jquery path -->
<script type="text/javascript" src="{{ asset('bundles/js/bootstrap.min.js') }}"></script>

@yield('scripts')

</body>
</html>
