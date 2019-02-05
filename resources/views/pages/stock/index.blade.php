@extends('layouts.default')

@section('content')
    <h1>Products</h1>

    @foreach ($products as $product)
        <li>{{ $product->productName }}</li>

    @endforeach

@stop