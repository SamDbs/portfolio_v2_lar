<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laravel Portfolio</title>
        <!-- Bootstrap Core CSS -->
        <link href={{ asset("vendor/bootstrap/css/bootstrap.min.css") }}  rel="stylesheet">
        <!-- Custom Fonts -->
        <link href={{ asset("vendor/fontawesome-free/css/all.min.css") }} rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href={{ asset("vendor/simple-line-icons/css/simple-line-icons.css") }} rel="stylesheet">

        <!-- Custom CSS -->
        <link href={{ asset("css/stylish-portfolio.min.css") }} rel="stylesheet">
        <link href={{ asset("css/app.css") }} rel="stylesheet">
        <!-- Bootstrap core JavaScript -->
        <script src={{ asset("vendor/jquery/jquery.min.js") }}></script>
        <script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
        <!-- Plugin JavaScript -->
        <script src={{ asset("vendor/jquery-easing/jquery.easing.min.js") }}></script>
        <!-- Custom scripts for this template -->
        <script src={{ asset("js/stylish-portfolio.min.js") }}></script>
    </head>
    <body id="page-top">
        @yield('content')
    </body>
</html>
