@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <div class="container text-center">
          <h1>About Us</h1>
          <p>MyLeftFoot</p>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center max-width: 25">
                    <h4> Father And Son </h4>
                    <img class="img-responsive img-thumbnail fs" src="img/fs.jpg">
                </div>
                <div class="col-sm-4 text-justify align-self-center">
                    <p class="fs-t">MyLeftFoot is a niche marketplace for people to buy and sell odd shoes, created by Monty Hollings & Nick Hollings</p>
                    <p class="fs-t">The Website was designed by Monty Hollings using laravel, sqlite, phpmyadmin and various other tools.</p>
                    <div class="alert alert-success" role="alert">
                            The site is currently in: [DEVELOPMENT]
                    </div>
                </div>
                <div class="col-sm-4 text-justify align-self-center">
                    <i class="fab fa-lg fa-github" aria-hidden="true"><a href="https://github.com/Vailyer/MyLeftFoot"> View on Github</a></i>
                    <hr>
                    <i class="fab fa-lg fa-twitter" aria-hidden="true"><a href="https://twitter.com/montyhollings"> Follow Me On Twitter</a></i>
                    <hr>

                </div>
            </div>
    </div>

    <div class="jumbotron">
            <div class="container text-center">
              <h1>Contact Us |TODO|</h1>
            </div>
    </div>
    
    
@endsection