@extends('layouts.auth')
@section('content')
<div class="col-md">
</div>
<div class="col-sm">
    <div class="row">
        <div class="container text-center">
            <img class="mb-4" src="../../img/shoe.png" alt="" width="72" height="72">
            <h3 class="text-center">Edit Project:</h3>
            <h3 class="title text-center">{{ $product->productName }}</h1>
            <hr>
            <div class="content">{{ $product->productDesc }}</div>
            <hr>
            <img class="card-img-top" src="{{ asset('/img/' . $product->imgurl) }}" alt="Card image cap">
            <hr>
            <div class="content"><h4 class="text-center">Product Price:</h4></div>
            <div class="content">{{ $product->price }}</div>
            <hr>
            <div class="content"><h4 class="text-center">Product Foot:</h4></div>
            <div class="content">{{ $product->foot }}</div>
            <hr>
            <div class="content"><h4 class="text-center">Product Gender:</h4></div>
            <div class="content">{{ $product->gender }}</div>
            <hr>
            <div class="content"><h4 class="text-center">Product Size:</h4></div>
            <div class="content">{{ $product->size }}</div>
            <hr>
            <div class="content"><h4 class="text-center">Product Colour:</h4></div>
            <div class="content">{{ $product->colour }}</div>
            <hr>
            <div class="content"><h4 class="text-center">Product Style:</h4></div>
            <div class="content">{{ $product->style }}</div>
            <hr>
            <p>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
            </p>
        </div>
    </div>
</div>
<div class="col-md">
</div>
@stop