@extends('layouts.default')
@section('content')
<body>

  <!-- Navigation -->
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">My Left Foot</h1>
        <h2 class="masthead-subheading mb-0">Buy and sell odd shoes today!</h2>
        <a href="/getting-started" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>

  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/converse.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h3 class="display-4">How many shoes thrown away...</h2>
            <p>Having different sized feet can be a nightmare. My Left Foot is a marketplace for people to buy and sell odd shoes!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/nike.jpeg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h3 class="display-4">Stop throwing out your old odd shoes!</h2>
            <p>With no fee until after you a completed purchase from a buyer theres nothing to lose!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/timbs.jpeg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h3 class="display-4">A Startup from Cornwall England</h2>
            <p>To find out more about My Left Foot, what it stands for and how it was founded:</p>
            <a href="/about-us" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop


