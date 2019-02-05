@extends('layouts.default')
@section('title')
    <title>MyLeftFoot</title>
@stop
@section('content')
    <div class="d-flex justify-content-center">
        <img src="img/banner.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <figure class="card card-product">
                        <div class="img-wrap"><img src="img/timbs.jpeg" /></div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Timberland</h4>
                            <p class="desc">High quality official timberland stock</p>
                            <div class="rating-wrap">
                                <div class="label-rating">12 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                        <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                        <div class="price-wrap h5">
                            <span class="price-new">£50 - £250</span>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="img/adidas.jpeg"></div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Adidas</h4>
                            <p class="desc">Official Adidas footwear</p>
                            <div class="rating-wrap">
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new">£ 75 +</span>
                            </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="img/nike.jpeg"></div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Nike</h4>
                            <p class="desc">Official Nike footwear</p>
                            <div class="rating-wrap">
                                <div class="label-rating">253 reviews</div>
                                <div class="label-rating">89 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                            <div class="price-wrap h5">
                                <span class="price-new">£ 75 +</span>
                            </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="img/boots.jpg"></div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Work Shoes</h4>
                            <p class="desc">Professional footwear</p>
                            <div class="rating-wrap">
                                <div class="label-rating">253 reviews</div>
                                <div class="label-rating">89 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">View Collection</a>
                            <div class="price-wrap h5">
                                <span class="price-new">£ 75 +</span>
                            </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="img/sneaker.jpeg"></div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Sneakers Shoes</h4>
                            <p class="desc">A collection of the hottest brands</p>
                            <div class="rating-wrap">
                                <div class="label-rating">253 reviews</div>
                                <div class="label-rating">89 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">View Collection</a>
                            <div class="price-wrap h5">
                                <span class="price-new">£ 75 +</span>
                            </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="img/dress.jpeg"> </div>
                    <figcaption class="info-wrap">
                            <h4 class="title">Dress Shoes</h4>
                            <p class="desc">Churches, Loake, Lobb and more</p>
                            <div class="rating-wrap">
                                <div class="label-rating">420 reviews</div>
                                <div class="label-rating">11 orders </div>
                            </div>
                    </figcaption>
                    <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">View Collection</a>
                            <div class="price-wrap h5">
                                <span class="price-new">£150+</span>
                            </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>

@stop