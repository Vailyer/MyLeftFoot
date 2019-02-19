<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
    </head>
    <body class="signinbody">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/getting-started">My Left Foot</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              @if (Auth::guest())
              <li class="nav-item">
                <a class="nav-link" href="/register">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Log In</a>
              </li>
              @endif
              @if (Auth::check())
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/products') }}">Marketplace</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/my-account') }}">My Account</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
        @yield('content')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
    </body>
</html>