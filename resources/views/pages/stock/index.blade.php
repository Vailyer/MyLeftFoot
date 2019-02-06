@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/products">Stock</a></li>
                    <li class="breadcrumb-item"><a href="/products">Mens</a></li>
                    <li class="breadcrumb-item active" aria-current="/products">Sneakers</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
            <div class="col-sm">
                    <div class="single category">
                        <h3 class="side-title">Search Category</h3>
                        <ul class="list-unstyled">
                            <li><a href="" title="">Mens <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Womens <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Children <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Sneakers <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Work Shoes <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Dress Shoes <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Adidas <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Nike <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Timberland <span class="pull-right">13</span></a></li>
                            <li><a href="" title="">Vans <span class="pull-right">13</span></a></li>
                        </ul>
                    </div>
            </div>
            <div class="col-md">
              <h3 class ="text-center">Post Your Shoe!</h3>
              <hr>
            </div>
            <div class="col-md">
              One of three columns
            </div>
          </div>
    </div>
</div>
@stop