@extends('layouts.default')
@section('content')
    <h1 class="title">{{ $product->productName }}</h1>
    <hr>
    <div class="content">{{ $product->productDesc }}</div>
    <hr>
    <div class="content">{{ $product->imgpath }}</div>
    <hr>
    <div class="content">{{ $product->stockAvailable }}</div>
    <hr>
    <p>
        <a href="/products/{{ $product->id }}/edit">Edit</a>
    </p>
    
@stop