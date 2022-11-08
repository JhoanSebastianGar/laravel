<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <!--busca la url-->
        <a href="{{route('home') }}">HOME</a>
        <a href="{{route('blog') }}">Blog</a>
        @auth
        <a href="{{route('dashboard') }}">dashboard</a>
        @else
        <a href="{{route('login') }}">login</a>
        @endauth
    </p>
<hr>
<!-- esta parte quedo como el nav de todo el proyecto -->
    @yield('content')
</body>
</html>