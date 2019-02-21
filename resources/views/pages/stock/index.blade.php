@extends('layouts.default')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Marketplace</h1>
        <p class="lead text-muted mb-0">The best place to find new shoes!</p>
        <div class="container"><a class="btn btn-primary btn-lg rounded-pill mt-5"  href="/products/create">Create New Post</a></div>  
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="{{ url('/products/sneakers') }}">Sneakers / Casual Shoes</a></li>
                    <li class="list-group-item"><a href="{{ url('/products/dress-shoes') }}">Dress Shoes</a></li>
                    <li class="list-group-item"><a href="{{ url('/products/work-shoes') }}">Work Shoes</a></li>
                    <li class="list-group-item"><a href="{{ url('/products/sports-shoes') }}">Sports Shoes</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="row">
            @foreach ($products as $product)   
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('/img/' . $product->imgurl) }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="/products/{{ $product->id}}" title="{{ $product->productName }}">{{ $product->productName }}</a></h4>
                            <p class="card-text">{{ $product->productDesc}}</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block">£{{ $product->price}}</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>
@stop