@extends('layouts.default')
@section('content')
<header class="bg-getstarted text-white getstartheader">
    <div class="container text-center">
      <h1>Welcome to My Left Foot</h1>
      <p class="lead">Getting Started</p>
    </div>
  </header>

  <section id="stepOne" class="getstartsection">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Step One</h2>
          <p class="lead">Sign up for an account with MyLeftFoot:</p>
          <div class="text-center"><a class="btn btn-primary btn-xl rounded-pill mt-5"  href="/register">Sign Up Today</a></div>
        </div>
      </div>
    </div>
  </section>

  <section id="stepTwo" class="bg-light getstartsection">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Step 2</h2>
          <p class="lead"> Please choose a following option </p>
            <div class="text-center">
                <a class="btn btn-primary btn-xl rounded-pill mt-5"  href="/products">Find a new shoe in your size!</a>
            </div>    
            <div class="text-center">
                <a class="btn btn-primary btn-xl rounded-pill mt-5"  href="/products/create">Sell your odd shoes!</a>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section id="StepThree" class="getstartsection">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Recieve Items / Money!</h2>
          <p class="lead">After completeing either your transaction for a new shoe purchase or sale, please find an email in your inbox from us giving you more information.</p>
        </div>
      </div>
    </div>
  </section>
@stop