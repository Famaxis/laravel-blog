<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Main
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}">{{ __('Admin page') }}</a>
            </li>
        </ul>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
<div">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">This is a blog on Laravel 7</h1>
            <p class="lead">Well, I should create a new blog from scratch on Laravel 8. What am I waiting for? :)</p>
        </div>
    </div>
</div>
</body>
</html>

