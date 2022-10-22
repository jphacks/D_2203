<!DOCTYPE html>
<html dir="ltr" lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:300,400,700|M+PLUS+Rounded+1c:300,400,500,700,800|Quicksand:400,700&amp;display=swap" as="style">    
    </head>
    <body>
        <header>
        @include('header')
        </header>
        @yield('content')
        <footer>
        @include('footer')
        </footer>
    </body>
</html>