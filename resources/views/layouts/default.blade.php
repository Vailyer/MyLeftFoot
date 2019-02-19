
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
    </head>
    <body class="@yield('bodyType')">
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

      <!--footer starts from here-->
      <footer class="footer">
        <div class="container bottom_border">
          <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
              <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
              <!--headin5_amrc-->
              <p class="mb10">A webapp built for a cs50 final project</p>
              <p><i class="fa fa-location-arrow"></i>Cornwall, England UK </p>
              <p><i class="fa fa-phone"></i>  +4407711286429  </p>
              <p><i class="fa fa fa-envelope"></i> <a id="mail" href="/contact">montydavidhollings@gmail.com</a></p>
            </div>

            <div class=" col-sm-4 col-md  col-6 col">
              <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
              <!--headin5_amrc-->
              <ul class="footer_ul_amrc">
                <li><a href="/products">Stock</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <li><a href="/tos">Terms and conditions #TODO</a></li>
                <li><a href="/privacy">Privacy Policy #TODO</a></li>
                <li><a href="/contact">Contact Us</a></li>
              </ul>
              <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-12 col">
              <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
              <!--headin5_amrc ends here-->

              <ul class="footer_ul2_amrc">
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Example tweet<a href="https://sd.keepcalm-o-matic.co.uk/i-w600/why-are-you-here-5.jpg">https://www.lipsum.com/</a></p></li>
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Trump man bad!<a href="https://sd.keepcalm-o-matic.co.uk/i-w600/why-are-you-here-5.jpg">https://www.lipsum.com/</a></p></li>
                <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>water prices reach record high<a href="https://sd.keepcalm-o-matic.co.uk/i-w600/why-are-you-here-5.jpg">https://www.lipsum.com/</a></p></li>
              </ul>
              <!--footer_ul2_amrc ends here-->
            </div>
        </div>
      </div>


      <div class="container">
      <!--foote_bottom_ul_amrc ends here-->
      <p class="text-center">Copyright @2019 | Designed by Monty Hollings  <a href="#">MyLeftFoot</a></p>

      <ul class="social_footer_ul">
      <li><a href="https://github.com/Vailyer/MyLeftFoot"><i class="fab fa-github"></i></a></li>
      <li><a href="https://twitter.com/montyhollings"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.linkedin.com/in/montyhollings/"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://www.instagram.com/monty_hollings/"><i class="fab fa-instagram"></i></a></li>
      </ul>
      <!--social_footer_ul ends here-->
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      </footer>
    </body>
</html>