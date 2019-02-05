@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <figure class="card card-product">
                        <div class="img-wrap"><img src="img/{{ $product->imgpath }}"></div>
                        <figcaption class="info-wrap">
                                <h4 class="productName">{{ $product->productName }}</h4>
                                <p class="desc">{{ $product->productDesc }}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="/products/{{ $product->id }}/edit" class="btn btn-sm btn-primary float-right">Edit</a>
                            <a href="/products/{{ $product->id}}" class="btn btn-sm btn-primary float-right">View</a>
                            <div class="price-wrap h5">
                                <span class="price-new">{{ $product->stockAvailable }}: Stock remaining</span>
                            </div>
                        </div>
                </figure>
            </div>
            @endforeach
        </div>
    </div>






@stop